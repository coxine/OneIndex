# OneIndex
Onedrive Directory Index

## 修改的内容
1. 常规美化
2. 去除影响加载速度的一些不必要的内容
3. 修改字体为仓耳与墨
4. 调整文件位置，方便使用

## 如何使用主题
1. 修改/view/nexmoe/layout.php的第15行，图片链接改为自己喜欢的即可。
```html
<a href="/"><img class="avatar" src="//q.qlogo.cn/g?b=qq&nk=3301696646&s=100"/></a>
```
2. 修改/view/mexmoe/layout.php的第18-22行，网页链接改为自己喜欢的即可。
```html
<li class="navli"><a href="//newtea.ml" target="_blank">新茶博客</a></li>
<li class="navli"><a href="//bbs.newtea.ml">新茶论坛</a></li>
<li class="navli"><a href="//costg.cf">余弦官网</a></li>
<li class="navli"><a href="//voice.costg.cf">余弦之声</a></li>
<li class="navli"><a href="/admin">管理区</a></li>
```
3. 安装完成后选择“nexmoe”主题。

## 感谢
1. https://gitee.com/a574247979/oneindex
2. https://gitee.com/beiwangshan/onindex-theme

---
# 以下是Oneindex原来的README

## 功能：
不占用服务器空间，不走服务器流量，  
直接列出 OneDrive 目录，文件直链下载。  

## 使用及免责协议
[使用及免责协议](./使用及免责协议.md)

## 安装运行
### 源码安装运行：
#### 需求：
1、PHP空间，PHP 5.6+ 需打开curl支持  
2、OneDrive 账号 (个人、企业版或教育版/工作或学校帐户)  
3、OneIndex 程序   

## 配置：
<img width="658" alt="image" src="https://raw.githubusercontent.com/donwa/oneindex/files/images/install.gif">  

### 计划任务  
[可选]**推荐配置**，非必需。后台定时刷新缓存，可增加前台访问的速度。  
```
# 每小时刷新一次token
0 * * * * /具体路径/php /程序具体路径/one.php token:refresh

# 每十分钟后台刷新一遍缓存
*/10 * * * * /具体路径/php /程序具体路径/one.php cache:refresh
```

### Docker 安装运行

- 请参考[TimeBye/oneindex](https://github.com/TimeBye/oneindex)

## 特殊文件实现功能  
` README.md `、`HEAD.md` 、 `.password`特殊文件使用  

可以参考[https://github.com/donwa/oneindex/tree/files](https://github.com/donwa/oneindex/tree/files)  

**在文件夹底部添加说明:**  
>在 OneDrive 的文件夹中添加` README.md `文件，使用 Markdown 语法。  

**在文件夹头部添加说明:**  
>在 OneDrive 的文件夹中添加`HEAD.md` 文件，使用 Markdown 语法。  

**加密文件夹:**  
>在 OneDrive 的文件夹中添加`.password`文件，填入密码，密码不能为空。  

**直接输出网页:**  
>在 OneDrive 的文件夹中添加`index.html` 文件，程序会直接输出网页而不列目录。  
>配合 文件展示设置-直接输出 效果更佳。  

## 命令行功能  
仅能在PHP CLI模式下运行  

**清除缓存:**  
```
php one.php cache:clear
```
**刷新缓存:**  
```
php one.php cache:refresh
```
**刷新令牌:**  
```
php one.php token:refresh
```
**上传文件:**  
```
php one.php upload:file 本地文件 [OneDrive文件]
```


**上传文件夹:**  
```
php one.php upload:folder 本地文件夹 [OneDrive文件夹]
```

例如：  
```
//上传demo.zip 到OneDrive 根目录  
php one.php upload:file demo.zip  

//上传demo.zip 到OneDrive /test/目录  
php one.php upload:file demo.zip /test/  

//上传demo.zip 到OneDrive /test/目录并将其命名为 d.zip  
php one.php upload:file demo.zip /test/d.zip  

//上传up/ 到OneDrive /test/ 目录  
php one.php upload:file up/ /test/
```
