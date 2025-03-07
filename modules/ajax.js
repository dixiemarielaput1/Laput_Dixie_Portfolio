
export function ajax() {

const form = document.querySelector(".contact-form");
const feedBack = document.createElement("div");
feedBack.id = "feedback";
form.appendChild(feedBack);

function regForm(event) {
  event.preventDefault();

  const url = "contact.php";
  const thisform = event.currentTarget;

  const formdata =
    "first_name=" +
    thisform.elements.first_name.value +
    "&phone=" +
    thisform.elements.phone.value +
    "&email=" +
    thisform.elements.email.value +
    "&comments=" +
    thisform.elements.comments.value;

  console.log(formdata);

  fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: formdata,
  })
    .then((response) => response.json())
    .then((responseText) => {
      console.log(responseText);
      feedBack.innerHTML = "";

      if (responseText.errors) {
        Object.values(responseText.errors).forEach((error) => {
          const errorElement = document.createElement("p");
          errorElement.textContent = error;
          feedBack.appendChild(errorElement);
        });
      } else {
        form.reset();
        const messageElement = document.createElement("p");
        messageElement.textContent = responseText.message;
        feedBack.appendChild(messageElement);
      }
    })
    .catch((error) => {
      console.log(error);
      feedBack.innerHTML = "";
      const messageElement = document.createElement("p");
      messageElement.textContent =
        "Oops something went wrong. Maybe you're using an older browser, or not connected to the internet. Sorry for the inconvenience.";
      feedBack.appendChild(messageElement);
    });
}

form.addEventListener("submit", regForm);

}