## 💻SUMMARY

### 📒What I learned today?

##### 10.15

We learned about flex!
But actually professor doesn't explain much about these things, so I think I should study more.
We learned about Grid!

We also learned about multiple classes.

```html
<div id="main container">main font</div>
<div id="container">sub font</div>
```

```css
.contatiner {
  font-size: 1rem;
}
.main {
  background-color: white;
}
```

We can do like this!

Also, we learned about how to link javascript in to html.
We can write like this!

```javascript
<script>
  function myFunction() { // no parameter, function name is myFunction
    var x = document.getElementsByClassName("main"); // get element by class name "main"!
    for (var i=0 ; i < x.length; i++) {
      x[i].style.display = "none";
    }
  }
</script>
```

If I want to get the element by ID, I can use `getElementById("")`.

But why we use javascript external file?
I think I should find this

Also, we learned about iframe!

```html
<iframe src="url" title="description"></iframe>
```

If I want to embed youtube,
![alt text](image-9.png)

I can click this button in the above image, and copy link.
But if I want to allow full screen, I should add property.

```html
<iframe
  src="https://www.youtube.com/embed/Hsuy_xzPyWQ?si=8X78khzrYGEJYTOh"
  title="IU-bye, summer"
  allowfullscreen
></iframe>
```

We start learning javascript.

```html
<div id="js"></div>
<script>
  document.getElementById("js").innerHTML = "Hello Javascript!";
</script>
```

The order should be correct! At first, I put `<script></script>` right after the `<body>` tag, and it doesn't work.
But after I changed the order, it works!

Javascript read HTML from the above, so if I write the `<div>` first, there is not `<div>` when the script works and this result in returning `null` by `document.getElementById("js")`.

Also, we can put styling by using `.style`.

```javascript
document.getElementById("js").innerHTML = "Hello Javascript!";
document.getElementById("js").style.fontsize = "5rem";
document.getElementById("js").style.backgroundColor = "yellow";
```

### 🌟My comment

##### 10.15

We finally learned little bit about javascript!
I didn't know about `<iframe>`, but I learned how to use it!
