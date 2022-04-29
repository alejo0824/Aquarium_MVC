<header class="header <?php echo $homePage ? 'home' : 'banner' ?>">
    <div class=" container-header">
        <div class="bar">
            <div class="logo">
                <a href="/">
                    <h2>aquarium</h2>
                </a>
            </div>  
            <div class="container-nav">
                <nav class="nav">
                    <div class="logo_mobile">
                        <a href="/">
                            <h2>aquarium</h2>
                        </a>
                    </div> 
                    <div class="nav_options">
                        <a class="<?php echo ($title === 'home') ? 'active' : ''; ?>" href="/">home</a>
                        <a class="<?php echo ($title === 'about us') ? 'active' : ''; ?>" href="/aboutUs">about us</a>
                        <a class="<?php echo ($title === 'services') ? 'active' : ''; ?>" href="/services">services</a>
                        <a class="<?php echo ($title === 'contact') ? 'active' : ''; ?>" href="/contact">contact us</a>
                        <a class="<?php echo ($title === 'blog') ? 'active' : ''; ?>" href="/blog">Blog</a>
                    </div>
                </nav>
                <img src="/build/img/moon-regular.svg" alt="dark button" class="dark-button">                
                <div class="menu-mobile">                    
                    <img src="/build/img/bars-solid.svg" alt="menu mobile" id="btn__moblie-menu" >
                    
                    <div class="btn__close-menu">
                        <img src="/build/img/xmark-solid.svg" alt="menu mobile" id="btn__close-menu">
                    </div>
                   
                </div>                                
            </div>
            
        </div>      
    
        <?php if($homePage): ?>   
        <div class="home-content">
            <p>real adveture!</p>
            <h1>best aquarium solution</h1>
            <a href="/contact">contact now</a>
        </div> 
        <?php else: ?>
        <div class="banner-content">
            <div class="title--custom">
                <h3> <?php echo $title; ?></h3>
                <p><a href="/">Home</a>&gt; <span> <?php echo $title;?> </span></p>
            </div>
        </div>           
        <?php endif;?>      
    </div>
    
</header>