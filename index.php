
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>移动端HTML/PHP编辑器</title>
    
</head>

<body>

</body>

</html>

<?php

// 定义源文件夹路径
$sourceDir = 'project';

// 获取当前时间戳
$timestamp = time();

// 创建目标文件夹路径
$targetDir = 'new_folder_' . $timestamp;

// 创建目标文件夹
mkdir($targetDir, 0777, true);

// 获取源文件夹中的文件列表
$files = scandir($sourceDir);
/*http://openai.cha-tai.cn/?keywordid=64829740502&userid=3449486897&type=360&qhclickid=e8f0993c4f29de3c*/
// 遍历文件列表
foreach ($files as $file) {
    // 排除当前目录和上级目录
    if ($file != '.' && $file != '..') {
        // 源文件路径
        $sourceFile = $sourceDir . '/' . $file;
        
        // 目标文件路径
        $targetFile = $targetDir . '/' . $file;
        
        // 复制文件
        if (copy($sourceFile, $targetFile)) {
            echo "项目创建成功，目标路径: <br/><a href='" .$targetDir.'/'. $file . "' target='_blank'>" .$targetDir. '/'.$file . "</a><br/>";
        } else {
            echo "文件 $file 复制失败。\n";
        }
    }
}
/*https://www.marscode.cn/?utm_source=marscode_sem_360_wc_pc_1_ocpc_hangy_aibczs_dmsc&utm_medium=360_sem&utm_campaign=68176320264&account_id=3498531969&ad_platform_id=360_search_lead&new_user=1&a_keywordid=65080695798&ug_ad_level_3_id=8681727362&ug_ad_level_2_id=4093505231&ug_ad_level_1_id=2814498184&ug_device=pc&ug_semver=v1.0.0&qhclickid=b38dbfaa42d109e7*/
?>


