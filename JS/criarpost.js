var twitterText = document.querySelector("#twitterText");
var tweetButton = document.querySelector("#tweetButton");
var tweetList = document.querySelector("#tweetList");

tweetButton.addEventListener("click", addTweet);

function addTweet(event) {
  var newLi = document.createElement("li");
  newLi.textContent = twitterText.value;
  tweetList.appendChild(newLi);
  twitterText.value = "";
}
