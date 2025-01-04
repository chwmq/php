<?php
// 获取表单提交的内容
$content = $_POST['content'];

// 生成文件名，使用当前时间戳
$filename = time() . '.php';

// 指定文件路径
$file_path = 'uploads/' . $filename;

// 确保目录存在，如果不存在则创建
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

// 将内容写入文件
file_put_contents($file_path, $content);

// 输出成功信息，并生成在新窗口中打开文件的链接
echo "内容已保存到文件: <a href='" . $file_path . "' target='_blank'>" . $file_path . "</a>";
?>
