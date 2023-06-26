<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/variable.css')); ?>">
    </head>
    <body class="antialiased">
         <header>
        <div class="container">
            <a href="#">Logo</a>
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="banner-container">
            <div class="container">
                <div class="left-section">
                    <h1>Welcome to Test Mania</h1>
                    <p>
                        Please fill the registeration form and submit.
                    </p>
                   
                </div>
                <div class="right-section">
                    <h4>
                        Registration
                    </h4>
                    <form action="<?php echo e(route('register.store')); ?>" method="post" autocomplete="off">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="post" tabindex="-1">
                        <div class="input-group">
                            <input type="text" class="set_value" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="Name"/>
                            <?php echo $errors->first('name', '<small class="help-block error-block">:message</small>'); ?>

                        </div>
                        <div class="input-group">
                            <input class="set_value" type="email" id="email" name="email" placeholder="Email"/>
                            <?php echo $errors->first('email', '<small class="help-block error-block">:message</small>'); ?>

                        </div>
                        <div class="input-group">
                            <input type="password" class="set_value" id="password" name="password" placeholder="Password" />
                            <?php echo $errors->first('password', '<small class="help-block error-block">:message</small>'); ?>

                        </div>
                        <div class="check-group"><div>
                        <label for="interests">Interests</label></div>
                            <input type="checkbox" id="sports" name="interest[]" value="Sports"/><label>Sports</label>
                            <input type="checkbox" id="reading" name="interest[]" value="Reading"/><label>Reading</label>
                            <input type="checkbox" id="news" name="interest[]" value="News"/><label>News</label>
                            <input type="checkbox" id="traveling" name="interest[]" value="Traveling"/><label>Traveling</label>
                            <input type="checkbox" id="fooding" name="interest[]" value="Fooding"/><label>Fooding</label>
                            <?php echo $errors->first('interest', '<small class="help-block error-block">:message</small>'); ?>

                        </div>
                        <div class="submit-control">
                            <input type="submit" class="submit-button" />
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>Designed by <span>Silpa</span></footer>
    </body>
</html>
<?php /**PATH C:\Users\silpa\OneDrive\Documents\Technical_Task\technical-task\resources\views/welcome.blade.php ENDPATH**/ ?>