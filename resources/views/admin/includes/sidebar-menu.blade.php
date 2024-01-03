

<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" class="header-brand-img light-logo1" alt="logo">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                  fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>


                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
                        <span class="side-menu__label">Category Module</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                        <li><a href="{{ route('category.create') }}" class="slide-item">Add Category</a></li>
                        <li><a href="{{ route('category.index') }}" class="slide-item">Manage Category</a></li>

                    </ul>
                </li>







                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16.6766357,7.3233643C15.7435303,4.2431641,12.8848267,2,9.5,2C5.3578491,2,2,5.3578491,2,9.5c0,3.3848267,2.2431641,6.2435303,5.3233643,7.1766357C8.2564697,19.7568359,11.1151733,22,14.5,22c4.1402588-0.0045166,7.4954834-3.3597412,7.5-7.5C22,11.1151733,19.7568359,8.2564697,16.6766357,7.3233643z M16,9.5c0,0.8760376-0.1757202,1.7103882-0.4899292,2.4730225l-3.4830933-3.4830933C12.7896118,8.1757202,13.6239624,8,14.5,8c0.4649658,0.0005493,0.9176636,0.0518799,1.3549194,0.1450806C15.9481201,8.5823364,15.9994507,9.0350342,16,9.5z M15.0283203,12.906311c-0.5328369,0.862854-1.2597656,1.5897217-2.1226807,2.1224365l-3.9343872-3.9343872c0.5328369-0.8630981,1.2598877-1.5901489,2.1229858-2.1230469L15.0283203,12.906311z M7.0787354,15.5289917C4.6891479,14.5682983,3,12.2332764,3,9.5C3,5.9101562,5.9101562,3,9.5,3c2.7313232,0.0031738,5.06427,1.6907959,6.0264893,4.0783081C15.1900635,7.0321655,14.8491211,7,14.5,7C10.3578491,7,7,10.3578491,7,14.5C7,14.8500366,7.0323486,15.1917114,7.0787354,15.5289917z M8,14.5c0-0.8759766,0.1757812-1.7103271,0.4899292-2.4729614l3.4830322,3.4830322C11.2103271,15.8242188,10.3759766,16,9.5,16c-0.465332,0-0.918457-0.0509644-1.3560791-0.1439209C8.0509644,15.418457,8,14.965332,8,14.5z M14.5,21c-2.7332764,0-5.0682983-1.6891479-6.0289917-4.0787354C8.8082886,16.9676514,9.1499634,17,9.5,17c4.1402588-0.0045166,7.4954834-3.3597412,7.5-7.5c0-0.3491211-0.0321655-0.6900635-0.0783081-1.0264893C19.3092041,9.43573,20.9968262,11.7686768,21,14.5C21,18.0898438,18.0898438,21,14.5,21z"/></svg>
                        <span class="side-menu__label">Product Module</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">UI Elements</a></li>
                        <li><a href="{{ route('product.create') }}" class="slide-item">Add Product</a></li>
                        <li><a href="{{ route('product.index') }}" class="slide-item">Manage Product</a></li>

                    </ul>
                </li>






            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                           width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
