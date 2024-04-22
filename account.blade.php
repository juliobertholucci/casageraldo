@extends(engine_view('base'))
<html>
    <head>
        @accountHeader()
        <style>
            
            .minicart-icon{
                
                top:0rem !important;
                
            }
            
            .a.btn.btn-link{
                
                display:none !important;
                
            }
            
            .cart-count{
                
                top:-1rem !important;
                
            }
            
            .btn-link{
                
                text-decoration:none;
                border:none;
                padding:5px;
                
            }
            
            .card-expiration-year{
                
                margin-top:0px !important;
                
            }
            
            .container-fluid{
                width: 100% !important;
            }
            .card-title {
                font-size: 18px !important;
                margin-top: 1.5rem !important;
                color:#222222;
            }
            account-orders .row.mb-md.d-none.d-md-flex,
            account-subscriptions-list .row.mb-md.d-none.d-md-flex{
                color: #FFF !important;
                padding-y: 5px;
                margin-bottom: 0 !important;
            }
            .col-md-3.text-center,
            .col-md-2.text-center{
                border-right: 2px solid #FFF;
                font-weight:700;
                padding: 10px 0;
            }
            account-orders-list-item,
            account-subscriptions-list-item{
                align-items: center;
                margin-bottom: 0 !important;
            }
            .row.mb-md.d-none.d-md-flex div{
                padding: 10px 0;
            }
            a.btn.btn-link{
                display:inline;
            }
            a.btn.btn-link:before{
                content: "\1f50d";
            }
            .list-group.list-group-flush.w-100{
                text-align: center;
                padding: 40px 0 80px;
                font-size: 2rem;
            }
            .btn{
                
                min-width: 50px !important;
                
            }
            
            #button-update-password:hover{
                
                background-color:#222222;
                color:#fff;
                transition:0.5s;
                
            }
            
            
            .card-header{
                
                font-size:12px !important;
                
            }
            
            
            @media screen and (max-width: 480px) {
                
                 .card-header, #list-gr-item-profile, #list-gr-item-orders, #list-gr-item-cards, .form-group>span, strong{
                
                    font-size:16px !important;
                    color:#222222;
                
                }
                
                .btn-load-freight-options{
                    
                    margin-top:25px !important;
                    
                }
                
                #button-update-password{
                    
                    padding:5px !important; 
                
                }
                
                
            }
            
           
            
            
            
            #button-update-password{
                padding:10px !important; 
                background-color:#762432;
                border-radius:10px;
                color:#fff;
                
            }
            
            .form-group{
                
                color:#762432;
                font-weight:600;
                
            }
            
           .fa.fa-plus{
                display: flex;
                align-self: center;
            }
            account-orders .row.mb-md span,
            account-subscriptions-list .row.mb-md span{
                font-size: 1.7rem;
                margin-left: auto;
                margin-right: auto;
                padding: 40px 0;
            }
            account-orders .row.mb-md a,
            account-subscriptions-list .row.mb-md a{
                
                color:#222222;
                
            }
            
            #list-gr-item-subscriptions{
                
                display:none;
                
            }
            
            
            
        </style>
    </head>
    <body>
         @section('page_content')
        
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Minha conta</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb -->
        
        <div class="container">
            @accountBody()
        </div>
        
        @endsection
    </body>
</html>