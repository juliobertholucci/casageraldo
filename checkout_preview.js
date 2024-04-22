var clientCNPJ = false;

CanopusEventCenter.addListener('ServerDataLoader.Loaded', function(dados) {
    if(dados.client !== null) {
          
       
                    clientTags = dados.client.tags;
                    clientTags.forEach(function(tag){
                        if(tag.name === "Cliente CNPJ"){
                            clientCNPJ = true;
                       
                        }
                    })
    }
})


CanopusEventCenter.addListener('Checkout.Preview.Built', function() {
    var fnUpdateQuantity = function(id, type, newQuantity, oldQuantity) {
        $.get('/checkout/cart/'+type+'/update/'+id+'?quantity='+newQuantity)
            .done(function() {
                CanopusEventCenter.emitEvent('Checkout.Updated', [id, 'update', type, newQuantity]);
            })
            .fail(function() {
                fnUpdateQuantityInput(id, oldQuantity);
            });
    };
    var fnUpdateQuantityInput = function(id, quantity) {
        $('#input-quantity-'+id).val(quantity);
    };
    var fnRemoveCartItemRow = function(id, type) {
        $('.canopus-cart-items ul li[data-id="'+id+'"][data-type="'+type+'"]').remove();
    };
    var fnRemoveItems = function(items) {
        if (items.length === 0) {
            CanopusEventCenter.emitEvent('Checkout.Removed');
            return;
        }
        
        var itemToRemove = items.shift();
        fnRemoveItem(itemToRemove.id, itemToRemove.type, items);
    };
    var fnRemoveItem = function(id, type, nextItemsToRemove) {
        $.get('/checkout/cart/'+type+'/remove/'+id)
            .done(function() {
                fnRemoveCartItemRow(id, type);
                fnRemoveItems(nextItemsToRemove);
            })
            .fail(function() {
            
            });
    };
    
    var fnBuildFreightOptions = function(freights) {
        var $container = $('.container-frete-preview ul');
        for(var freight of freights) {
            var $freightItem = $("<li></li>");
            var daysInTimeCost = freight.time_cost.split('.').shift();
            var daysInTimeCostLimit = freight.time_cost_limit
            
            if(daysInTimeCostLimit !== null){
                daysInTimeCostLimit = daysInTimeCostLimit.split('.').shift();
                $freightItem.html(
                `<i class="fa fa-truck" aria-hidden="true"></i>`
                +`<span class="description">${freight.description}</span>`
                +`<span class="amount">R$ ${freight.amount.toLocaleString('pt-BR', {maximumFractionDigits: 2, minimumFractionDigits: 2})}</span>`
                +`<span class="time-cost">de ${daysInTimeCost}</span>`
                +`<span class="time-cost-join">a</span>`
                +`<span class="time-cost-limit">${daysInTimeCostLimit}</span>`
                +`<span class="time-cost-append">dias úteis</span>`
                );
            } else{
            $freightItem.html(
                `<i class="fa fa-truck" aria-hidden="true"></i>`
                +`<span class="description">${freight.description}</span>`
                +`<span class="amount">R$ ${freight.amount.toLocaleString('pt-BR', {maximumFractionDigits: 2, minimumFractionDigits: 2})}</span>`
                +`<span class="time-cost"> - Aproximadamente ${daysInTimeCost}</span>`
                +`<span class="time-cost-append">dias úteis</span>`
                );
            }
            
            $container.html($freightItem)
        }
    }
    
    var fnPrepareCartItemsButtons = function() {
        $(".btn-less-qtd-modal").click(function() {
            var id = $(this).attr('data-id');
            var type = $(this).attr('data-type');
            var quantity = $('#input-quantity-'+id).val();
            var newQuantity = parseInt(quantity) - 1;
            if (newQuantity > 0) {
                fnUpdateQuantityInput(id, newQuantity);
                fnUpdateQuantity(id, type, newQuantity, quantity);
            }
        });
        $(".btn-more-qtd-modal").click(function() {
            var id = $(this).attr('data-id');
            var type = $(this).attr('data-type');
            var quantity = $('#input-quantity-'+id).val();
            var newQuantity = parseInt(quantity) + 1;
            
            fnUpdateQuantityInput(id, newQuantity);
            fnUpdateQuantity(id, type, newQuantity, quantity);
        });
        $(".btn-remove-item").click(function() {
            var id = $(this).attr('data-id');
            var type = $(this).attr('data-type');
            
            fnRemoveItems([{id: id, type: type}]);
        });
    };
    var fnPrepareClearCartButton = function() {
        $("#btn-clear-cart").click(function() {
            var itemRows = $('.canopus-cart-items ul li.cart-item-row');
            var items = [];
            
            for(var itemRow of itemRows) {
                var id = itemRow.getAttribute('data-id');
                var type = itemRow.getAttribute('data-type');
                
                items.push({id: id, type: type});
            }
    
            fnRemoveItems(items);
        });
    };
    var fnPrepareLoadFreightOptionsButton = function() {
        $('#btn-load-freight-options').click(function() {
            var cep = Inputmask.unmask($('#input-cep-freight-options').val(), '99999-999');
            if (cep.length === 8) {
                $.get('/ecommerce/zip-code-ranges?zip_code='+cep)
                    .done(function(response) {
                        fnBuildFreightOptions(response.data);
                    })
                    .fail(function() {
                        iziToast.error({
                            message: 'Tivemos um problema ao carregar as opções de frete. Por favor, tente novamente'
                        })
                    });
            }
        });
    };
    var fnPrepareLoadFreightOptionsInput = function() {
        $('#input-cep-freight-options').inputmask("99999-999");
        $('#input-cep-freight-options').keyup(function() {
            var cep = Inputmask.unmask($('#input-cep-freight-options').val(), '99999-999');
            var $btn = $('#btn-load-freight-options');
            var $container = $('.container-frete-preview ul');
            
            if (cep.length === 8) {
                $btn.removeAttr('disabled');
            } else {
                $btn.attr('disabled', 'disabled');
                $container.html("");
            }
        });
    };
    
    var fnShowCnpjPrices = function(){
      if(clientCNPJ){
           $.get({
                        'url': 'checkout/cart/items',
                        'success': function(response) {
                            cartItems = document.querySelector('.canopus-cart-items ')
                            response.data.forEach(function(product){
                                var itemRow = cartItems.querySelector('[data-id="'+ product.id + '"] ');
                                itemRow.querySelector('.price').innerHTML = "<p>R$"+ product.price.toFixed(2).replace(".", ",") +"</p>"
                            })
                                }
                            })
        .then(
         $.get({
                        'url': 'checkout/cart/resume',
                        'success': function(response) {
                            var subtotal = document.querySelector('.canopus-cart-modal-bottom .cart-subtotal')
                            subtotal.innerText = "R$"+ response.data.total.toFixed(2).replace(".", ",") 

                        }
        })
        )
      }  
    };
    
    fnShowCnpjPrices();
    fnPrepareCartItemsButtons();
    fnPrepareClearCartButton();
    fnPrepareLoadFreightOptionsButton();
    fnPrepareLoadFreightOptionsInput();
});
CanopusEventCenter.addListener('ServerDataLoader.Loaded', function(data) {
    if(!clientCNPJ){
        
    $('.cart-subtotal').html(
        'R$ '+data.cart.total.toLocaleString('pt-BR', {maximumFractionDigits: 2, minimumFractionDigits: 2})
    );
    $('.container-frete-preview ul').html("");
    }
});