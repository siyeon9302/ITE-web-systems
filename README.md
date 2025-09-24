## 💻25.09.24 SUMMARY

### 📒What I learned today?

##### 09.24

First, professor reviewed types of CSS tags.

- inline CSS: put css in `html` tags, like `<body style="background-color:blue;"></body>`

- internal CSS: put CSS in html file, in the `<head></head>` tags.

```html
<head>
  <meta charset="utf-8" />
  <title>Salem State University</title>
  <!--inline style tag-->
  <style>
    h1 {
      color: blue;
    }
    body {
      background-color: aqua;
    }
  </sty>
</head>
```

![alt text](image.png)

- external CSS: link CSS file into html file
  I can write like this!

```html
<head>
  <meta charset="utf-8" />
  <title>Salem State University</title>
  <link rel="stylesheet" href="htmlpart4.css" />
  <!--inline style tag-->
  <!-- <style>
        h1{
            color: blue;
        }
        body{
            background-color: aqua;
        }
    </style> -->
</head>
```

if I want to make a comment in CSS file, I can use `/**/`.
Like this!

```css
/* filename: htmlpart4.css */
/* Linking this file in htmlpart4.html */
```

When we write CSS in html inline tag, we write like this (using '=')

```html
<img
  src="/week2/sources/logo.png"
  alt="Salem State University logo"
  height="50"
/>
```

But if I want to write this in external CSS file, we should change '=' to ':'

```css
img {
  height: "50";
}
```

#### HTML links

the `target` attribute specifies where to open the linked document!

- `_self` - Default. Opens the document in the same window/tab as it was clicked
- `_blank` - Opens the document in a new window or tab
- `_parent` - Opens the document in the parent frame
- `_top` - Opens the document in the full body of the window

Let's try

```html
<a href="https://www.salemstate.edu/" target="_blank"
  ><em>Salem State University Home Page</em></a
>
```

If I click the link,
<br>
![alt text](/week3/image-2.png)
<br>
There is a new tab next to the original tab!
<br>
![alt text](/image-1.png)

##### Absolute URLs vs Relative URLs

- Absolute Path: The full path to a file or folder starting from the root directory. It always points to the same location, no matter where you run it.
  `/home/user/docs/file.txt`

- Relative Path: The path to a file or folder relative to the current working directory. It depends on where you run it.
  `../docs/file.txt`

```html
<h2>Absolute URLs</h2>
<p><a href="https://www.w3.org/">W3C</a></p>
<p><a href="https://www.google.com/">Google</a></p>

<h2>Relative URLs</h2>
<p><a href="html_images.asp">HTML Images</a></p>
<p><a href="/css/default.asp">CSS Tutorial</a></p>
```

Also, we learned that we can use web developer tool in the browser!

### 🌟My comment

##### 09.24

As I learned various tags about HTML and CSS, I want to know how browser works to read and show these codes.
