<?php if (!defined('THINK_PATH')) exit();?><table class="table ">
    <tr class="tableHead">
        <th>名称<span class="glyphicon glyphicon-plus add_file"></span></th>
        <th>修改时间</th>
        <th>大小</th>
        <th>类型</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($dirTable)): foreach($dirTable as $key=>$item): ?><tr>
            <td class="dir_name_wrap"> <span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="color: rgb(255,255,200)">
            </span>&nbsp&nbsp&nbsp<span class="dir_name"><?php echo ($item["name"]); ?></span>
            </td>
            <td><?php echo ($item["attr"]["mtime"]); ?></td>
            <td><?php echo ($item["attr"]["size"]); ?></td>
            <td>文件夹</td>
            <td>11111</td>
        </tr><?php endforeach; endif; ?>
    <?php if(is_array($fileTable)): foreach($fileTable as $key=>$vo): ?><tr>
            <td><span class="glyphicon glyphicon-file" aria-hidden="true" style="color: rgb(255,255,200)"></span>&nbsp&nbsp&nbsp<?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["attr"]["mtime"]); ?></td>
            <td><?php echo ($vo["attr"]["size"]); ?></td>
            <td>文件</td>
            <td>11111</td>
        </tr><?php endforeach; endif; ?>

</table>