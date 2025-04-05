<?php
/* Smarty version 5.4.3, created on 2025-03-12 15:09:58
  from 'file:views/sections/hero.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d1a3c6c966e2_25993617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73cdff25128ac715d0c876afd866f4dd2ac47c5b' => 
    array (
      0 => 'views/sections/hero.html',
      1 => 1741792198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d1a3c6c966e2_25993617 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/eventify/views/sections';
?><div id="dynamic-header" class="flex flex-col md:flex-row w-full relative bg-gray-900 overflow-hidden h-[28rem] md:h-[32rem] lg:h-[40rem]">
        <div class="flex flex-col justify-center w-full md:w-1/2 z-10 text-white relative h-full" style="background-color: #1a1a1a;">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('headerEvents'), 'event', false, NULL, 'headerLoop', array (
  'first' => true,
  'index' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['index'];
?>
            <div class="absolute inset-0 bg-cover bg-center md:hidden <?php if (($_smarty_tpl->getValue('__smarty_foreach_headerLoop')['first'] ?? null)) {?>active<?php } else { ?>hidden<?php }?> header-mobile-bg" 
                 style="background-image: url('../eventify/assets/imgs/<?php echo $_smarty_tpl->getValue('event')->img_header;?>
');">
                                <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <div class="button-container relative z-10 h-full flex flex-col justify-center px-6 py-8">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('headerEvents'), 'event', false, NULL, 'headerLoop', array (
  'first' => true,
  'index' => true,
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach1DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['index'];
?>
                <div class="header-content w-full <?php if (($_smarty_tpl->getValue('__smarty_foreach_headerLoop')['first'] ?? null)) {?>active<?php } else { ?>hidden<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('event')->id;?>
">
                    <p class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4"><?php echo $_smarty_tpl->getValue('event')->title;?>
</p>
                    <p class="text-sm md:text-base mb-6 opacity-90"><?php echo $_smarty_tpl->getValue('event')->desc;?>
</p>
                    <button class="view-event-btn inline-flex items-center justify-center px-5 py-3 text-base font-medium text-gray-900 rounded-full bg-amber-200 hover:bg-amber-300 transition-colors duration-300 w-max" 
                            data-id="<?php echo $_smarty_tpl->getValue('event')->id;?>
">
                        Voir l'event
                    </button>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

                <div class="header-indicators flex justify-center space-x-2 absolute bottom-6 left-0 right-0 z-20">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('headerEvents'), 'event', false, NULL, 'indicatorLoop', array (
  'first' => true,
  'index' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_indicatorLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_indicatorLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_indicatorLoop']->value['index'];
?>
                <span class="indicator w-2 h-2 rounded-full bg-gray-500 cursor-pointer transition-colors <?php if (($_smarty_tpl->getValue('__smarty_foreach_indicatorLoop')['first'] ?? null)) {?>bg-amber-200<?php }?>" 
                      data-slide="<?php echo ($_smarty_tpl->getValue('__smarty_foreach_indicatorLoop')['index'] ?? null);?>
"></span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>

        <div class="hidden md:block md:w-1/2 relative h-full">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('headerEvents'), 'event', false, NULL, 'headerLoop', array (
  'first' => true,
  'index' => true,
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach3DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_headerLoop']->value['index'];
?>
            <div class="absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat <?php if (($_smarty_tpl->getValue('__smarty_foreach_headerLoop')['first'] ?? null)) {?>active<?php } else { ?>hidden<?php }?> header-desktop-bg" 
                 style="background-image: url('../eventify/assets/imgs/<?php echo $_smarty_tpl->getValue('event')->img_header;?>
');">
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <div class="absolute top-0 left-0 h-full w-24 z-10" style="background: linear-gradient(to right, #1a1a1a, transparent);"></div>
    </div>    
</div>

<style>
    /* Utilisation de display: none/block au lieu de opacity */
    .header-content.active,
    .header-mobile-bg.active,
    .header-desktop-bg.active {
        display: block;
    }

    /* Assurer que le texte est lisible sur l'image de fond en mobile */
    @media (max-width: 768px) {
        .button-container {
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }

        .button-container p {
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }
    }
</style>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    // Configuration
    var changeInterval = 5000; // Changer toutes les 5 secondes
    var $contents = $('.header-content');
    var $mobileBackgrounds = $('.header-mobile-bg');
    var $desktopBackgrounds = $('.header-desktop-bg');
    var $indicators = $('.indicator');
    var totalSlides = $contents.length;
    var currentSlide = 0;
    var slideInterval;
    var isAnimating = false;

    // Fonction pour changer de slide avec transition
    function changeSlide(newIndex) {
        if (isAnimating || currentSlide === newIndex) return;
        isAnimating = true;

        // Mettre à jour les indicateurs immédiatement
        $indicators.removeClass('bg-amber-200').addClass('bg-gray-500');
        $indicators.eq(newIndex).removeClass('bg-gray-500').addClass('bg-amber-200');

        // Cacher l'élément actuel
        $contents.eq(currentSlide).fadeOut(400, function() {
            $(this).removeClass('active').addClass('hidden');
        });
        $mobileBackgrounds.eq(currentSlide).fadeOut(400, function() {
            $(this).removeClass('active').addClass('hidden');
        });
        $desktopBackgrounds.eq(currentSlide).fadeOut(400, function() {
            $(this).removeClass('active').addClass('hidden');
        });

        // Afficher le nouvel élément après un court délai
        setTimeout(function() {
            $contents.eq(newIndex).fadeIn(400).removeClass('hidden').addClass('active');
            $mobileBackgrounds.eq(newIndex).fadeIn(400).removeClass('hidden').addClass('active');
            $desktopBackgrounds.eq(newIndex).fadeIn(400).removeClass('hidden').addClass('active');

            // S'assurer que l'animation est terminée
            setTimeout(function() {
                isAnimating = false;
                currentSlide = newIndex;
            }, 500);
        }, 300);
    }

    // Démarrer le défilement automatique
    function startSlideshow() {
        slideInterval = setInterval(function() {
            if (!isAnimating) {
                var nextSlide = (currentSlide + 1) % totalSlides;
                changeSlide(nextSlide);
            }
        }, changeInterval);
    }

    // Arrêter le défilement automatique
    function stopSlideshow() {
        clearInterval(slideInterval);
    }

    // Clic sur un indicateur
    $indicators.on('click', function() {
        if (!isAnimating) {
            var newIndex = $(this).data('slide');
            stopSlideshow();
            changeSlide(newIndex);
            startSlideshow();
        }
    });

    // Clic sur le bouton "Voir l'event"
    $('.view-event-btn').on('click', function() {
        var eventId = $(this).data('id');
        // Rediriger vers la page de l'événement
        window.location.href = 'event_details.php?id=' + eventId;
    });

    // Démarrer le diaporama
    if(totalSlides > 1) {
        startSlideshow();
    }
});
<?php echo '</script'; ?>
>
<?php }
}
