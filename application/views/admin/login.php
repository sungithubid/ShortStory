<!-- Main -->
<div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <header class="major">
                <h3>登录</h3>
                <?php echo validation_errors(); ?>
                <?php echo form_open('user/login') ?>
                <input type="text" name="username" placeholder="username" value="<?php echo set_value('username');?>">
                <br/>
                <input type="password" name="password" vakue="<?php echo set_value('password');?>">
                <br/>
                <input type="submit" name="submit" value="登录">
            </form>
            </header>
        </section>
    </div>
</div>
