const create_tweet_submit_btn = document.querySelector("#create-tweet-submit-btn");
const create_tweet_text = document.querySelector("#create-tweet-text");
// just to delete a class from a btn 

// make svg to be dynamic
const file_input = document.querySelector("#file-input");
const upload_btn = document.querySelector("#image-selection")

function update_create_submit_btn_state() {
    if(create_tweet_text.value === "") {
        create_tweet_submit_btn.classList.add("btn-disabled");
    } else {
        create_tweet_submit_btn.classList.remove("btn-disabled");
    }
}

upload_btn.addEventListener("click", function() {
    file_input.click();
});

create_tweet_text.addEventListener("input", update_create_submit_btn_state)


