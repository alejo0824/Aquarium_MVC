<header class="header <?php echo $homePage ? 'home' : 'flase' ?>">
    <div class="container container-header">
        <div class="bar">
            <div class="logo">
                <a href="/">
                    <h2>aquarium</h2>
                </a>
            </div>  
            <div class="container-nav">
                <nav class="nav">
                    <a href="/">home</a>
                    <a href="/aboutUs">about us</a>
                    <a href="/services">services</a>
                    <a href="/contact us">contact us</a>
                    <a href="/blog">Blog</a>
                </nav>
            </div>
        </div>      

         <?php if($homePage): ?>   
            <div class="home-content">
                <p>real adveture!</p>
                <h1>best aquarium solution</h1>
            </div> 
        <?php else: ?>
            <p>It isn't a Home Page</p>
        <?php endif;?>      
    </div>
</header>