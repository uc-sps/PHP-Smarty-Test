<?php
/* Smarty version 3.1.44, created on 2022-12-01 10:29:55
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/smartyTest/template/testing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_63888223dfaff0_91658330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '951ad4813af472fdeb191692a1e7b2f29ac5dee5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/smartyTest/template/testing.tpl',
      1 => 1669890540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63888223dfaff0_91658330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),6=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),7=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),));
$_smarty_tpl->compiled->nocache_hash = '115330951963888223d5bbc8_32717003';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
</head>
<body>
        <a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'hex');?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>
</a>
        <br>

        <?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['cust_name']->value),$_smarty_tpl);?>

        <br>

        <?php echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_id']->value,'output'=>$_smarty_tpl->tpl_vars['cust_name']->value,'selected'=>$_smarty_tpl->tpl_vars['email']->value,'saperator'=>'<br>'),$_smarty_tpl);?>

        <br>
        <?php echo smarty_function_html_radios(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_id']->value,'output'=>$_smarty_tpl->tpl_vars['cust_name']->value,'selected'=>$_smarty_tpl->tpl_vars['email']->value,'saperator'=>'<br>'),$_smarty_tpl);?>

        <br>
        <?php $_smarty_tpl->_assignInScope('str1', ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value));?>
        <?php echo $_smarty_tpl->tpl_vars['str1']->value;?>

        <br>
        <?php $_smarty_tpl->_assignInScope('start', 1);?>
        <?php $_smarty_tpl->_assignInScope('end', 10);?>
        <?php $_smarty_tpl->_assignInScope('t', 5);?>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                <?php echo $_smarty_tpl->tpl_vars['t']->value*$_smarty_tpl->tpl_vars['foo']->value;?>

                <br>
        <?php }
}
?><br>


        <?php $_smarty_tpl->_assignInScope('g', 7);?>

        <?php if ($_smarty_tpl->tpl_vars['g']->value%2 == 0) {?>
                even <br>
        <?php } else { ?>
                odd <br>
        <?php }?>
                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                        <?php echo $_smarty_tpl->tpl_vars['g']->value*$_smarty_tpl->tpl_vars['foo']->value;?>

                        <br>
                <?php }
}
?>
        <br>
        <?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>

        <?php
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cust_id']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total !== 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['cust_id']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</td>
                </tr>
        <?php
}
}
?>

        <br>

        <?php $_smarty_tpl->_assignInScope('s1', mb_strtolower($_smarty_tpl->tpl_vars['s1']->value, 'UTF-8'));?>
        <?php $_smarty_tpl->_assignInScope('s2', mb_strtolower($_smarty_tpl->tpl_vars['s2']->value, 'UTF-8'));?>
        <br>

        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['s1']->value,'ucertify','uCertify');?>

        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['s2']->value,'ucertify','uCertify');?>

        <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['s1']->value,30,"\n",false);?>

        <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['s2']->value,30,"\n",false);?>

        <?php echo ($_smarty_tpl->tpl_vars['s1']->value).($_smarty_tpl->tpl_vars['s2']->value);?>



        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <li><?php echo print_r($_smarty_tpl->tpl_vars['data']->value);?>
</li>
                <br>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <?php echo $_smarty_tpl->tpl_vars['Contacts']->value[0];?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['Contacts']->value[1];?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][0];?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][1];?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['Contacts']->value[0];?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['Contacts']->value[0];?>
<br>
</body>
</html><?php }
}
