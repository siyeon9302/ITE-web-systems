document.addEventListener("mousemove", (e) => {
  const pupils = document.querySelectorAll(".pupil");
  pupils.forEach((pupil) => {
    const eye = pupil.parentElement.getBoundingClientRect();
    const x = e.clientX - (eye.left + eye.width / 2);
    const y = e.clientY - (eye.top + eye.height / 2);
    const angle = Math.atan2(y, x);
    const move = 6;
    pupil.style.transform = `translate(${Math.cos(angle) * move}px, ${
      Math.sin(angle) * move
    }px)`;
  });
});
