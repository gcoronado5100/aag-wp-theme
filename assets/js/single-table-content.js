const headings = document.querySelectorAll(
  " .post__content h1, .post__content h2, .post__content h3, .post__content h4, .post__content h5, .post__content h6"
);

function convertTitleToId(title) {
  return title
    .toLowerCase()
    .replace(/[^\w\s-]/g, "")
    .trim()
    .replace(/\s+/g, "-")
    .replace(/-+/g, "-");
}

headings.forEach((heading) => {
  heading.id = convertTitleToId(heading.textContent);
});

let tableContainer = document.querySelector(".single__index");
let table = document.createElement("ul");
tableContainer.appendChild(table);

headings.forEach((heading) => {
  let listItem = document.createElement("li");
  let anchor = document.createElement("a");
  anchor.href = `#${heading.id}`;
  anchor.textContent = heading.textContent;
  listItem.appendChild(anchor);
  table.appendChild(listItem);
});
