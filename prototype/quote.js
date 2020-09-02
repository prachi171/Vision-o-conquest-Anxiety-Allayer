let quote = document.getElementById('quote')
let author = document.getElementById('author')
let n = localStorage.getItem('on_load_counter');

if (n === null || n=== 1642) {
    n = 0;
}
 
n++;
 
localStorage.setItem("on_load_counter", n);


fetch("https://type.fit/api/quotes")
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    quote.textContent = data[n].text
    author.textContent = data[n].author
  });