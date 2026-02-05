<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('页头 Logo 地址'), _t('填写图片 URL，支持 HTTPS 或相对协议 //，留空则显示站点名称。'));
    $form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $footerLogoUrl = new Typecho_Widget_Helper_Form_Element_Text('footerLogoUrl', NULL, NULL, _t('页尾 Logo 地址'), _t('填写图片 URL，支持 HTTPS 或相对协议 //，留空则显示站点名称。'));
    $form->addInput($footerLogoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon 地址'), _t('填写图片 URL，支持 HTTPS 或相对协议 //，留空则不设置 Favicon。'));
    $form->addInput($favicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $iosicon = new Typecho_Widget_Helper_Form_Element_Text('iosicon', NULL, NULL, _t('Apple Touch Icon 地址'), _t('填写图片 URL，支持 HTTPS 或相对协议 //，留空则不设置。'));
    $form->addInput($iosicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $searchPage = new Typecho_Widget_Helper_Form_Element_Text('searchPage', NULL, NULL, _t('独立搜索页地址'), _t('输入独立搜索页面（Template Page of Search）的完整 URL（需要带上 https://）。'));
    $form->addInput($searchPage->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

    $contactPage = new Typecho_Widget_Helper_Form_Element_Text('contactPage', NULL, NULL, _t('联系方式页面地址'), _t('输入你的联系方式页面的完整 URL（需要带上 https://）。'));
    $form->addInput($contactPage->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

    $pjaxSet = new Typecho_Widget_Helper_Form_Element_Radio('pjaxSet',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用 PJAX 无刷新加载'), _t('启用前请确保已关闭“设置-评论”中的“开启反垃圾保护”选项。'));
    $form->addInput($pjaxSet);

    $DnsPrefetch = new Typecho_Widget_Helper_Form_Element_Radio('DnsPrefetch',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用 DNS 预解析'), _t('启用后将对 CDN 资源和 Gravatar 进行 DNS 预解析加速。（注意：此功能当前存在已知问题，暂不受支持，不建议开启）'));
    $form->addInput($DnsPrefetch);

    $htmlCompress = new Typecho_Widget_Helper_Form_Element_Radio('htmlCompress',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用 HTML 代码压缩'), _t('启用后将压缩 HTML 代码。注意：可能会与部分插件存在兼容性问题，请自行测试。'));
    $form->addInput($htmlCompress);

    $fastClickSet = new Typecho_Widget_Helper_Form_Element_Radio('fastClickSet',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用移动端点击延迟消除'), _t('消除部分移动端浏览器点击延时，请自行评估是否有必要开启。'));
    $form->addInput($fastClickSet);

    $postListSwitch = new Typecho_Widget_Helper_Form_Element_Radio('postListSwitch',
        array('threeList' => _t('三栏'),
            'oneList' => _t('单栏'),
        ),
        'oneList', _t('首页文章列表布局'), _t('选择首页文章列表的显示样式，默认为单栏'));
    $form->addInput($postListSwitch);

    $categoryNav = new Typecho_Widget_Helper_Form_Element_Radio('categoryNav',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('导航栏显示分类'), _t('启用后将在导航栏展示文章分类菜单，默认禁用。'));
    $form->addInput($categoryNav);

    $colorBgPosts = new Typecho_Widget_Helper_Form_Element_Radio('colorBgPosts',
        array('customColor' => _t('启用'),
            'defaultColor' => _t('禁用'),
        ),
        'defaultColor', _t('启用文章自定义色块'), _t('启用后可通过文章自定义字段控制色块颜色（支持 blue, purple, green, yellow, red）。'));
    $form->addInput($colorBgPosts);

    $postshowthumb = new Typecho_Widget_Helper_Form_Element_Radio('postshowthumb',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('文章页显示题图'), _t('启用后将在文章详情页顶部显示缩略图。'));
    $form->addInput($postshowthumb);

    $relatedPosts = new Typecho_Widget_Helper_Form_Element_Radio('relatedPosts',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用相关文章推荐'), _t('在文章详情页底部，根据标签，推荐相关的文章（最多显示 6 条）。'));
    $form->addInput($relatedPosts);

    $tableOfContents = new Typecho_Widget_Helper_Form_Element_Radio('tableOfContents',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用文章目录 '), _t('在文章页右侧生成目录。仅在屏幕宽度大于 1000px 时显示。'));
    $form->addInput($tableOfContents);

    $useHighline = new Typecho_Widget_Helper_Form_Element_Radio('useHighline',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用代码高亮'), _t('启用后将对文章内的代码块进行高亮渲染，支持 22 种编程语言。'));
    $form->addInput($useHighline);

    $useMathjax = new Typecho_Widget_Helper_Form_Element_Radio('useMathjax',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用 MathJax 公式渲染'), _t('启用后将对内容页进行数学公式渲染（支持 $公式$ 和 $$公式$$）。'));
    $form->addInput($useMathjax);

    $GoogleAnalytics = new Typecho_Widget_Helper_Form_Element_Textarea('GoogleAnalytics', NULL, NULL, _t('Google Analytics 代码'), _t('填写 Google Analytics 跟踪代码（需包含 script 标签）。'));
    $form->addInput($GoogleAnalytics);


    $socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('微博主页链接'), _t('填写微博主页地址。'));
    $form->addInput($socialweibo->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialzhihu = new Typecho_Widget_Helper_Form_Element_Text('socialzhihu', NULL, NULL, _t('知乎主页链接'), _t('填写知乎主页地址。'));
    $form->addInput($socialzhihu->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('GitHub 主页链接'), _t('填写 GitHub 主页地址。'));
    $form->addInput($socialgithub->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('Twitter 主页链接'), _t('填写 Twitter 主页地址。'));
    $form->addInput($socialtwitter->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));


    $srcAddress = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('原图地址 (CDN 替换前)'), _t('附件存放的原始 URL，例如：http://www.yourblog.com/usr/uploads/'));
    $form->addInput($srcAddress->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $cdnAddress = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('CDN 加速地址 (CDN 替换后)'), _t('CDN 加速域名，例如：http://yourblog.qiniudn.com/'));
    $form->addInput($cdnAddress->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $default_thumb = new Typecho_Widget_Helper_Form_Element_Text('default_thumb', NULL, '', _t('默认缩略图'),_t('当文章无图片时显示的默认缩略图 URL。'));
    $form->addInput($default_thumb->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

    $TurnstileSet = new Typecho_Widget_Helper_Form_Element_Radio('TurnstileSet',
        array('able' => _t('启用'),
            'disable' => _t('禁用'),
        ),
        'disable', _t('启用 Cloudflare Turnstile 验证'), _t('启用后将在评论区开启 Turnstile 人机验证。'));
    $form->addInput($TurnstileSet);

    $TurnstileSecret = new Typecho_Widget_Helper_Form_Element_Text('TurnstileSecret', NULL, NULL, _t('Cloudflare Turnstile Secret Key'), _t('输入 Cloudflare Turnstile 的 Secret Key。'));
    $form->addInput($TurnstileSecret);

    $TurnstileSiteKey = new Typecho_Widget_Helper_Form_Element_Text('TurnstileSiteKey', NULL, NULL, _t('Cloudflare Turnstile Site Key'), _t('输入 Cloudflare Turnstile 的 Site Key。'));
    $form->addInput($TurnstileSiteKey);

    $ICPRecordNumber = new Typecho_Widget_Helper_Form_Element_Text('ICPRecordNumber', NULL, '', _t('ICP 备案号'),_t('输入 ICP 备案号，例如：粤ICP备XXXXXXX号。'));
    $form->addInput($ICPRecordNumber->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

    $MoeICPRecordNumber = new Typecho_Widget_Helper_Form_Element_Text('MoeICPRecordNumber', NULL, '', _t('萌 ICP 备案号'), _t('输入萌 ICP 备案号（如果你有的话。可在 icp.gov.moe 申请），留空则不显示。'));
    $form->addInput($MoeICPRecordNumber->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
}

function themeInit($archive){
    Helper::options()->commentsMaxNestingLevels = 999;
    if ($archive->is('archive')) {
        $archive->parameter->pageSize = 12;
    }
}

function showThumb($obj,$size=null,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment;
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
    }
    if(empty($thumb) && empty($options->default_thumb)){
        return '';
    }else{
        $thumb = empty($thumb) ? $options->default_thumb : $thumb;
    }
    if($link){
        return $thumb;
    }
}

function parseFieldsThumb($obj){
    $options = Typecho_Widget::widget('Widget_Options');
    if(!empty($options->src_add) && !empty($options->cdn_add)){
        $fieldsThumb = str_ireplace($options->src_add,$options->cdn_add,$obj->fields->thumb);
        echo trim($fieldsThumb);
    }else{
        return $obj->fields->thumb();
    }
}

function parseContent($obj){
    $options = Typecho_Widget::widget('Widget_Options');
    if(!empty($options->src_add) && !empty($options->cdn_add)){
        $obj->content = str_ireplace($options->src_add,$options->cdn_add,$obj->content);
    }
    $obj->content = preg_replace("/<a href=\"([^\"]*)\">/i", "<a href=\"\\1\" target=\"_blank\">", $obj->content);
    $obj->content = preg_replace('/<img(.*?)src(.*?)=(.*?)"(.*?)">/i', '<img$1src$3="$4"$5 loading="lazy">', $obj->content);
    $obj->content = preg_replace_callback('/<h([1-5])>(.*?)<\/h\1>/i', function($matches) {
        static $id = 1;
        $hyphenated = 'anchor-' . $id;
        $id++;
        return '<h' . $matches[1] . ' id="' . $hyphenated . '">' . $matches[2] . '</h' . $matches[1] . '>';
    }, $obj->content);

    echo trim($obj->content);
}

function getCommentAt($coid){
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')
        ->from('table.comments')
        ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')
            ->from('table.comments')
            ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#comment-'.$parent.'">@'.$author.'</a>';
        echo $href;
    } else {
        echo '';
    }
}

function getRecentPosts($obj,$pageSize){
    $db = Typecho_Db::get();
    $rows = $db->fetchAll($db->select('cid')
       ->from('table.contents')
       ->where('type = ? AND status = ?', 'post', 'publish')
       ->order('created', Typecho_Db::SORT_DESC)
       ->limit($pageSize));
    foreach($rows as $row){
        $cid = $row['cid'];
        $apost = $obj->widget('Widget_Archive@post_'.$cid, 'type=post', 'cid='.$cid);
        $output = '<li><a href="'.$apost->permalink.'">'.$apost->title.'</a></li>';
        echo $output;
    }
}

function getHotTags($obj, $limit){
    $db = Typecho_Db::get();
    $tags = $db->fetchAll($db->select()
        ->from('table.metas')
        ->where('type = ?', 'tag')
        ->order('count', Typecho_Db::SORT_DESC)
        ->limit($limit));
    foreach($tags as $tag){
        $tag = $obj->filter($tag);
        $output = '<li><a href="'.$tag['permalink'].'"># '.$tag['name'].'</a></li>';
        echo $output;
    }
}

function randBgIco(){
    $bgIco=array('book','game','note','chat','code','image','web','link','design','lock');
    return $bgIco[mt_rand(0,9)];
}

function randBgColor(){
    $bgColor=array('blue','purple','green','yellow','red','orange');
    return $bgColor[mt_rand(0,5)];
}

function theNext($widget, $default = NULL){
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('table.contents.created > ?', $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', Typecho_Db::SORT_ASC)
        ->limit(1);
    $content = $db->fetchRow($sql);
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="'.$content['permalink'].'" title="'.$content['title'].'">⬅</a>';
        echo $link;
    } else {
        echo $default;
    }
}

function thePrev($widget, $default = NULL){
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('table.contents.created < ?', $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', Typecho_Db::SORT_DESC)
        ->limit(1);
    $content = $db->fetchRow($sql);
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="'.$content['permalink'].'" title="'.$content['title'].'">➡</a>';
        echo $link;
    } else {
        echo $default;
    }
}

function compressHtml($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key - 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key - 1] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}

Typecho_Plugin::factory('Widget_Feedback')->comment = ['XComment', 'feedbackFilter'];
class XComment {
    public static function feedbackFilter($comment, $archive)
    {
        $options = Typecho_Widget::widget('Widget_Options');
        if ($options->TurnstileSet != 'able') {
            return $comment;
        }

/*      // Uncomment to skip CAPTCHA verification for logged-in users
        if (Typecho_Widget::widget('Widget_User')->hasLogin()) {
            return $comment;
        }
*/
        
        $secret = $options->TurnstileSecret;
        $remote_addr = $_SERVER['REMOTE_ADDR'];
        $cf_url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
        $token = $_POST['cf-turnstile-response'];
        $msg = '';
        $isPass = false;
    
        // Request data
        $data = array(
            "secret" => $secret,
            "response" => $token,
            "remoteip" => $remote_addr
        );
    
        // Initialize cURL
        $curl = curl_init();
    
        // Set the cURL options
        curl_setopt($curl, CURLOPT_URL, $cf_url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        // Execute the cURL request
        $response = curl_exec($curl);
    
        // Check for errors
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            // Handle the error
            $msg = '[Turnstile] cURL Error: ' . $error_message;
        }else{
            /* Parse Cloudflare's response and check if there are any validation errors */
            $response = json_decode($response,true);
            if ($response['error-codes'] && count($response['error-codes']) > 0){
                $msg = 'Cloudflare Turnstile 验证码保护机制未通过您的评论请求。请检查您是否“通过”了验证码检查，若问题无法解决，请联系管理员汇报此问题。</br>Cloudflare Turnstile protection did not pass your comment request. Please check if you have passed the CAPTCHA verification. if the problem cannot be resolved, please contact the administrator to report this issue.</br>Error codes: ';
                foreach($response['error-codes'] as $e){
                    $msg .= $e;
                }
            }else{
                $isPass = true;
            }
        }
    
        // Close cURL
        curl_close($curl);
    
        if ($isPass) {
            return $comment;
        } else {
            throw new \Typecho\Widget\Exception(_t($msg, '因 Cloudflare Turnstile 发生错误，导致评论失败。请检查验证码状态和网络连接，若问题无法解决，请联系管理员汇报此问题。</br>Comment failed due to an error with Cloudflare Turnstile. Please check the CAPTCHA status and your network connection, if the problem cannot be resolved, please contact the administrator to report this issue.'), 403);
        }
    }
}