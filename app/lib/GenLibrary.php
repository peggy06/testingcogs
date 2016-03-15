<?php
class GenLibrary
{
    public static function retrieve_field($key, $field, $default_data = null, $other_data = null)
    {
        if($default_data == null)
        {
            $value = "";
        }
        else
        {
            $value = $default_data;
        }
        
        
        switch ($field)
        {
            case 'TEXTBOX FIELD':
                $return = '<input required="required" autocomplete="off"  type="text" name="' . $key . '" value="' . $value . '" class="input-xxlarge" />';
            break;
            case 'FILE UPLOAD':
                if($value == "")
                {
                   $return = '  <div id="uploaded-container"></div>
                                <div id="queue"></div>
                                <input required="required" id="file_upload" name="file_upload" type="file" multiple="true">
                                <input id="upload-name" name="' . $key . '" value="' . $value . '" type="hidden">';
                }
                else
                {                    
                    $return = '  
                                <div id="uploaded-container"></div>
                                <div id="queue"></div>
                                <span class="uploader-visibility" style="display: none"><input id="file_upload" name="file_upload" type="file" multiple="true"></span>
                                <input id="upload-name" name="' . $key . '" value="' . $value . '" type="hidden">
                                <div class="uploaded-container">
                                    <div class="input-append">
                                        <div id="upload-box" class="uneditable-input span3" style="padding: 7px; cursor: pointer;">
                                            <i class="icon-file fileupload-exists"></i>
                                            <span class="fileupload-preview"><a style="text-decoration: none; color: #000" target="_blank" href="assets/uploads/' . $value . '">' . $value . '</a></span>
                                        </div>
                                        <span class="change-upload btn btn-file">
                                            <span class="fileupload-exists">Change</span>
                                        </span>
                                    </div>
                                </div>';
                }
            break;
            case 'PASSWORD FIELD':
                $return = '<input required="required" autocomplete="off" type="password" name="' . $key . '" value="' . $value . '" class="input-xxlarge" />';
            break;
            case 'SIMPLE TEXTAREA':
                $return = '<textarea required="required" style="resize:none" class="input-xxlarge" rows="5" cols="80" name="' . $key . '">' . $value . '</textarea>';
            break;
            case 'WYSWYG TEXTAREA':
                $return = '<textarea required="required" style="resize:none" class="wyswyg" rows="5" cols="80" name="' . $key . '">' . $value . '</textarea>';
            break;
            case 'TIME PICKER':
                $return = '<div required="required" class="input-append bootstrap-timepicker"><input id="timepicker1" name="' . $key . '" value="' . $value . '" class="input-small" type="text"><span class="add-on"><i class="icon-time"></i></span></div>';
            break;
            case 'AUTO TIME':
                $return = '<input required="required" autocomplete="off"  type="text" name="' . $key . '" value="<?php echo date("F d, Y",time()); ?> - <?php echo date("h:i A",time()); ?>" class="input-xxlarge" />';
            break;
            default: $return = $return = '<input required="required" autocomplete="off"  type="text" name="' . $key . '" value="' . $value . '" class="input-xxlarge" />';;
        }
        
        return $return;
    }
    public static function before_insert($field, $value)
    {
        switch ($field)
        {
            case 'TIME PICKER':
                $return = date("h:i", strtotime($value));
            break;
            default: $return = $value;
            case 'AUTO TIME':
                $return = date("Y-m-d H:i:s", time());
            break;
            default: $return = $value;
        }
        
        return $return;

    }
    public static function before_update($field, $value)
    {
        switch ($field)
        {
            case 'TIME PICKER':
                $return = date("h:i", strtotime($value));
            break;
            default: $return = $value;
        }
        
        return $return;
    }
    public static function before_show($field, $value)
    {
        switch ($field)
        {
            case 'PRIMARY KEY':
                $return =  "ID. " . $value;
            break;
            case 'TIME PICKER':
                $return = date("h:i:A", strtotime($value));
            break;
            case 'FILE UPLOAD':
                $return = '<a target="_blank" href="assets/uploads/' . $value . '">' . $value . '</a>';
            break;
            case 'AUTO TIME':
                $return = date("F d, Y",  strtotime($value)) . " - " .  date("h:i A", strtotime($value));
            break;
            case 'SIMPLE TEXTAREA':
                $return = substr($value, 0, 20) . "...";
            break;
            default: $return = $value;
        }
        
        return $return;
    }
    public static function before_show_as_value($field, $value)
    {
        switch ($field)
        {
            case 'TIME PICKER':
                $return = date("h:i", strtotime($value));
            break;
            default: $return = $value;
        }
        
        return $return;
    }
}
?>
