<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
</head>
<body>
        <a href="mailto:{$email|escape:'hex'}"> {$email|escape:'mail'}</a>
        <br>

        {html_options name=foo options=$cust_name }
        <br>

        {html_checkboxes name='id' values=$cust_id output =$cust_name selected=$email saperator='<br>'}
        <br>
        {html_radios name='id' values=$cust_id output =$cust_name selected=$email saperator='<br>'}
        <br>
        {$str1 = $str1|cat:$str2}
        {$str1}
        <br>
        {$start=1}
        {$end=10}
        {$t=5}
        {for $foo = $start to $end}
                {$t*$foo}
                <br>
        {/for}<br>


        {$g=7}

        {if $g%2 == 0}
                even <br>
        {else}
                odd <br>
        {/if}
                {for $foo = $start to $end}
                        {$g*$foo}
                        <br>
                {/for}
        <br>
        {counter start= 0 skip=2 }<br>
        {counter}<br>
        {counter}<br>

        {section name=rows loop=$cust_id}
                <tr class="{cycle values="odd,even"}">
                <td>{$cust_id[rows]}</td>
                </tr>
        {/section}

        <br>

        {$s1=$s1|lower}
        {$s2=$s2|lower}
        <br>

        {$s1|replace:'ucertify':'uCertify'}
        {$s2|replace:'ucertify':'uCertify'}
        {$s1|wordwrap:30}
        {$s2|wordwrap:30}
        {$s1|cat:$s2}


        <ul>
        {foreach $our_culture as $data}
                <li>{foreach}</li>
                <br>
        {/foreach}
        </ul>

        {foreach name=outer item=contact from=$Contacts}
                <hr>
                {foreach key=key item=item from=$contact}
                        {$key}:{$item}<br>
                {/foreach}
        {/foreach}

</body>
</html>