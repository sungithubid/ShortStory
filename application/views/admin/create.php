<!-- Main -->

<div id="main" class="wrapper style1">
    <div class="container">
      <section>
        <header class="major">
          <h4>输入标题</h2>
          <?php echo validation_errors(); ?>
          <?php echo form_open('home/create');?>
          <input type="text" name="title" placeholder="title" value="<?php echo set_value('title'); ?>">
          <h4>文章作者</h2>
          <input type="text" name="artist" placeholder="artist" value="<?php echo set_value('artist'); ?>">
          <h4>输入文章内容</h4>
          <textarea id="editor" name="content" placeholder="这里输入内容" autofocus><?php echo set_value('content'); ?></textarea>
          <input type="submit" value="提交" /> 
          </form>
      </section>
    </div>
</div>
<script type="text/javascript">
var editor = new Simditor({
    textarea: $('#editor')
});
</script>