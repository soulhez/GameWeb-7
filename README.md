# gameWEB

## 仿一个游戏网站：www.shangshiwl.com
这是一家从事游戏开发以及游戏运营的公司，旗下的一个游戏网站平台！咱要做的就是一个字：仿。
## 序言
项目创建于2018-9-6，成员：TabKey9

```
#配置 gameweb 为独立虚拟主机之一
<VirtualHost *:80>
    # 设置网站目录
    DocumentRoot "F:/WAMP/gameWEB/public"
    # 设置网站域名
    ServerName gameweb
    # 设置目录访问权限
    <Directory "F:/WAMP/gameWEB/">
        # 指定目录启用特性
        Options Indexes FollowSymLinks 
        # 是否允许使用.htaccess文件默认为None
     AllowOverride All
        # 访问目录权限
        Require all granted
    DirectoryIndex index.php index.html
    </Directory>
</VirtualHost>

```
### 注意事项：本项目采用ThinkPHP5完整版框架，以及采用GitHub进行版本迭代开发。有可能出现的问题就是：克隆下来不能用？
##### 可能原因1：ThinkPHP5自带的.gitignore文件，不止一个。我觉得不应该擅自改动，于是就会出现某些文件不会进入GitHub的版本控制中。
##### 我的解决方案就是：你先自行下载一个ThinkPHP5解压，然后再用我开源的这个项目覆盖上去，使得缺失的文件得以补全。
##### 如果还有其他问题，请给我发邮件：admin@tlip.cn

