## 💻 25.09.17 SUMMARY

### 📒 What I Learned Today

I heard the term **"Web Safe Color"** for the first time.  
There are a lot of color charts on [htmlcolorcodes.com](https://htmlcolorcodes.com).  
I learned that colors can be represented in **Hex code**, **RGB code**, and **HSL code**.  
I don’t know much about the HSL code yet, so I think I should study it more.

According to the professor (I’m not 100% sure, but), both RGB code and HSL code are written in function form, so they use parameters.

---

We also learned about **font-family**.  
Here’s an example (this is inline styling with CSS):

```html
<h3 style="font-family: 'Courier New', Courier, monospace;">
  This is an example
</h3>
```

---

###### ✍️ Formatting

I learned about text formatting:

- `<b></b>`: makes text bold
- `<strong></strong>`: makes text bold (semantic emphasis)
- `<i></i>`: italic font
- `<em></em>`: italic font (semantic emphasis)
- `<mark></mark>`: highlights text
- `<del></del>`: draws a horizontal line through text
- `<sub></sub>`: makes text appear a little lower
- `<sup></sup>`: opposite of `sub`, makes text appear a little higher

For example:

```html
<h1>We love water. Have lots of H<sub>2</sub>O every day.</h1>
```

---

###### 📜 Quotations

- `<blockquote></blockquote>`: used for quotations

```html
<blockquote cite="https://www.w3schools.com/">
  For 60 years, WWF has worked to help people and nature thrive. As the world's
  leading conservation organization, WWF works in nearly 100 countries.
</blockquote>
```

- `<q></q>`: used for short, inline quotations
- `<abbr></abbr>`: shows an abbreviation with a dotted underline

```html
<p>
  The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.
</p>
```

---

###### 🎨 What is HSL?

HSL stands for **Hue, Saturation, and Lightness**.  
It is one of the ways to define colors in CSS.

- **Hue (색상)**: a degree on the color wheel (0–360)
  - 0 = Red, 120 = Green, 240 = Blue
- **Saturation (채도)**: intensity of the color (0% = gray, 100% = full color)
- **Lightness (명도)**: brightness of the color (0% = black, 100% = white, 50% = normal)

Examples:

```css
/* Red */
color: hsl(0, 100%, 50%);

/* Pastel Blue */
color: hsl(200, 100%, 80%);

/* Gray */
color: hsl(0, 0%, 50%);
```

👉 HSL is more intuitive for humans to adjust colors compared to RGB.

---

### 🌟 My Comment

I am always surprised by the atmosphere of class, because students are really confident in themselves and feel free to ask questions.

Also, luckily, I think my listening skills have improved! Last week, I couldn’t understand what the professor was saying, but today I could almost understand everything.

I thought I already knew HTML and CSS well, but there are still so many tags I didn’t know about. I realized I should stay humble and keep learning.
