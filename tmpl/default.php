<?php
defined('_JEXEC') or die;
?>

<div class="<?php echo $params->get('moduleclass_sfx');?>">
    <div><?php echo $params->get('pretext');?></div>

        <form method="post" name="quickcontact_frm">
            <fieldset>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" style="width: 95%;"\>

                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 95%;"\>

                <label for="message">Message</label>
                <textarea rows="5" cols="30" style="width:95%;" name="message"></textarea>

                <button type="submit">Submit</button>
            </fieldset>

            <input type="hidden" name="check" value="i"\>

        </form>

    <div><?php echo $params->get('posttext');?></div>
</div>
