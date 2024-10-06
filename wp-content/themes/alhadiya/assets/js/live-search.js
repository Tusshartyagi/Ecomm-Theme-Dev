function searchFetch(e) {
    var datafetch = e.closest('.search_bar').querySelector('.search_result');
    if (!datafetch) {
        console.error("No search_result found for", e.closest('.search_bar'));
        return;
    }
    if (e.value.trim().length > 0) {
        datafetch.style.display = "block";
    } else {
        datafetch.style.display = "none";
    }

    // Find the form element by traversing the DOM upwards from the input element
    const searchForm = e.closest('form');
    if (!searchForm) {
        console.error("No form found for", e);
        return;
    }

    var formdata = new FormData(searchForm);
    formdata.append("source", "product");
    formdata.append("image", "true");
    formdata.append("action", "asearch");
    AjaxAsearch(formdata, e);
}

async function AjaxAsearch(formdata, e) {
    const url = liveSearchParams.ajax_url;
    try {
        const response = await fetch(url, { method: "POST", body: formdata });
        const data = await response.text();
        var datafetch = e.closest('.search_bar').querySelector('.search_result');
        if (!datafetch) {
            console.error("No search_result found for", e.closest('.search_bar'));
            return;
        }
        if (data) {
            datafetch.innerHTML = data;
        } else {
            datafetch.innerHTML = `<ul><a href="#"><li>Sorry, nothing found</li></a></ul>`;
        }
    } catch (error) {
        console.error("Error fetching data:", error);
        var datafetch = e.closest('.search_bar').querySelector('.search_result');
        if (!datafetch) {
            console.error("No search_result found for", e.closest('.search_bar'));
            return;
        }
        datafetch.innerHTML = `<ul><a href="#"><li>Error fetching data</li></a></ul>`;
    }
}

document.addEventListener("click", function(e) {
    if (!e.target.classList.contains("input_search")) {
        document.querySelectorAll("div.search_result").forEach(e => e.style.display = "none");
    } else {
        if (e.target.value.trim().length > 0) {
            var datafetch = e.target.closest('.search_bar').querySelector('.search_result');
            if (!datafetch) {
                console.error("No search_result found for", e.target.closest('.search_bar'));
                return;
            }
            datafetch.style.display = "block";
        }
    }
});
