document.getElementById("searchInput").addEventListener("input", function () {
    const searchQuery = this.value.toLowerCase();
    const books = document.querySelectorAll(".book-list li");
  
    books.forEach((book) => {
      const bookText = book.textContent.toLowerCase();
      if (bookText.includes(searchQuery)) {
        book.style.display = "";
      } else {
        book.style.display = "none";
      }
    });
  });
  