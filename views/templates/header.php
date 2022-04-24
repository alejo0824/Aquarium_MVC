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
                    <a class="<?php echo ($title === 'home') ? 'active' : ''; ?>" href="/">home</a>
                    <a class="<?php echo ($title === 'about us') ? 'active' : ''; ?>" href="/aboutUs">about us</a>
                    <a class="<?php echo ($title === 'services') ? 'active' : ''; ?>" href="/services">services</a>
                    <a class="<?php echo ($title === 'contact') ? 'active' : ''; ?>" href="/contact">contact us</a>
                    <a class="<?php echo ($title === 'blog') ? 'active' : ''; ?>" href="/blog">Blog</a>
                </nav>
                <div class="dark-mode-boton">
                    <img src="/build/img/moon-regular.svg" alt="">
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
            <p>It isn't a Home Page</p>
        </div>           
        <?php endif;?>      
    </div>
    
</header>