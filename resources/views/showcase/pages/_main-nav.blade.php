<ul id="main-nav" class="nav-menu {{ \App\Menu::getInverseClass() }} col-sm-12 col-md-9">
    <?php foreach($menus as $menu)
    { ?>

    <li class="nav-menu__item
                <?php if($menu->isCurrentMenu())
                {
                     echo " active";

                    if($menu->hasChildren())
                        {
                            echo " nav-menu--has-children";
                        }
                } ?>
            "><a href="{{ $menu->slug }}">{{ $menu->name }}</a>
    </li>

    <?php if($menu->hasChildren() and $menu->isCurrentMenu())
          { ?>

        <ul class="nav-menu__second">

            <?php foreach($menu->getChildMenu() as $child)
                  { ?>

            <li class="nav-menu__item"><a href="{{ $child->slug }}">{{ $child->name }}</a></li>

            <?php } ?>

                    <!--<li class="nav-menu__item"><a href="#">Star Team</a></li>
                        <li class="nav-menu__item"><a href="#">Star Team</a></li>
                        <li class="nav-menu__item"><a href="#">Star Team</a></li>-->
        </ul>

    <?php }
    }?>
</ul>