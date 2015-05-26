<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title_for_layout; ?></title>
    <?php
        echo $this->Html->css(array(
            '/admin/css/bootstrap.min.css',
            '/admin/css/dashboard.css',
            '/admin/css/thumbnail-gallery.css',
            '/admin/css/easy-responsive-tabs.css',
        ));

        echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
        $app = array();
        $app['basePath'] = Router::url('/');
        $app['params'] = array(
            'controller' => $this->params['controller'],
            'action' => $this->params['action'],
            'named' => $this->params['named'],
        );
        echo $this->Html->scriptBlock('var App = ' . $this->Js->object($app) . ';');
    ?>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CakePHP Admin Plugin</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><?php echo $this->Html->link(__d('admin', 'Dashboard'), '/admin'); ?></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo __d('admin', 'Languages'); ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?php
                                    echo $this->Html->image("Admin.flags/por.png", array(
                                        "alt" => __d('admin', "Brazilian"),
                                        'url' => '/admin/languages/pt-br',
                                        'class' => 'lang-flag'
                                    ));
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo $this->Html->image("Admin.flags/eng.png", array(
                                        "alt" => __d('admin', "English"),
                                        'url' => '/admin/languages/eng',
                                        'class' => 'lang-flag'
                                    ));
                                ?>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __d('admin', 'User control'); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?php echo $this->Html->link(__d('admin', 'Users'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'index', 'admin' => true)); ?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?php echo $this->Html->link(__d('admin', 'Logout'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'logout', 'admin' => true)); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php
                echo $this->Html->link(
                    $this->Html->image('Admin.flags/125x125.jpg'),
                    '../profile/view',
                    array(
                      'class' => 'img-circle',
                      'escape' => false
                    )
                );
            ?>
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Painel</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="row-fluid">
                <?php
                    echo $this->Session->flash();
                    echo $this->Session->flash('auth');
                ?>
                    <blockquote><?php echo $title_for_layout; ?> - Gestão</blockquote>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
    <?php
        echo $this->Html->script('/admin/js/bootstrap.min.js');
    ?>
    <script type="text/javascript">
        $(function(){
            $('.lang-flag').each(function(i, val){
                $alt = val.alt;
                $(this).parent('a').append(' '+$alt);
            });
        });
    </script>
</body>
</html>