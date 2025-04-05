<?php
/* Smarty version 5.4.3, created on 2025-03-29 18:22:05
  from 'file:views/sections/sliderHome.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e83a4df19b28_77444121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bcec072719e29d0ec32cdd680e3aafb32156e3e' => 
    array (
      0 => 'views/sections/sliderHome.html',
      1 => 1743272524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e83a4df19b28_77444121 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><style>
    .slick-prev, .slick-next {
        width: 40px;
        height: 40px;
        z-index: 10;
    }
    .slick-prev {
        left: 10px;
    }
    .slick-next {
        right: 10px;
    }
    .slick-prev:before, .slick-next:before {
        font-size: 40px;
        opacity: 0.7;
    }
    .slide-content {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }
    .plus-btn {
        background-color: rgba(255, 255, 255, 0.8);
        color: #333;
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .plus-btn:hover {
        background-color: rgba(255, 255, 255, 1);
    }
</style>

<div class="bg-gray-300 py-8">
    <div class="container mx-auto">
        <div class="slider">
            <!-- Slide 1 -->
            <div class="px-2">
                <div class="relative h-64 bg-gray-600 rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300/666666" alt="Image 1" class="w-full h-full object-cover">
                    <div class="slide-content">
                        <h3 class="text-xl font-medium mb-1">Titre</h3>
                        <p class="text-sm mb-3">Petite description ici</p>
                        <button class="plus-btn">Plus d'infos</button>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="px-2">
                <div class="relative h-64 bg-gray-600 rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300/666666" alt="Image 2" class="w-full h-full object-cover">
                    <div class="slide-content">
                        <h3 class="text-xl font-medium mb-1">Titre</h3>
                        <p class="text-sm mb-3">Petite description ici</p>
                        <button class="plus-btn">Plus d'infos</button>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="px-2">
                <div class="relative h-64 bg-gray-600 rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300/666666" alt="Image 3" class="w-full h-full object-cover">
                    <div class="slide-content">
                        <h3 class="text-xl font-medium mb-1">Titre</h3>
                        <p class="text-sm mb-3">Petite description ici</p>
                        <button class="plus-btn">Plus d'infos</button>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="px-2">
                <div class="relative h-64 bg-gray-600 rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300/666666" alt="Image 4" class="w-full h-full object-cover">
                    <div class="slide-content">
                        <h3 class="text-xl font-medium mb-1">Titre</h3>
                        <p class="text-sm mb-3">Petite description ici</p>
                        <button class="plus-btn">Plus d'infos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Initialisation du slider -->
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            // arrows: true, // Active les flèches
            // dots: false, // Désactive les points de navigation
            // autoplay: true,
            // autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ]
        });
    });

    
<?php echo '</script'; ?>
><?php }
}
