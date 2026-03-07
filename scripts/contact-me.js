/*
Author: Patricia Sunday
Purpose: javascript file for contact me page
*/

window.onload = function () {
    const uploadDiv = document.getElementById("file-upload");
    const fileInput = document.getElementById("file");
    const fileLabel = uploadDiv.querySelector("label span");

    // clicking the div  opens the file popup
    uploadDiv.addEventListener("click", () => fileInput.click());

    // stop label click from bubbling to div since label already opens popup
    uploadDiv.querySelector("label").addEventListener("click", e => e.stopPropagation());

    // update label and preview when a file ischosen
    fileInput.addEventListener("change", function (){
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            fileLabel.textContent = file.name; // change displayed file label to chosen file's name

            const previewUrl = URL.createObjectURL(file);
            removePreview();

            if (file.type.startsWith("image/")) {
                const img = document.createElement("img");
                img.src = previewUrl;
                img.alt = "File preview";
                showPreview(img, file.name);
            } else if (file.type === "application/pdf") {
                const embed = document.createElement("embed");
                embed.src = previewUrl;
                embed.type = "application/pdf";
                showPreview(embed, file.name);
            }
            // no preview for other file types for now
        }
    });

    // showPreview inserts a file preview, with a chosen file replacing the default file icon
    function showPreview(el, filename) {
        // set file element size and placement
        el.style.cssText = "width: calc(100% - 1.5rem); height: 13rem; object-fit: cover; border-radius: 0.75rem; display: block; margin: 0 0.75rem;";

        // filename shown centered below preview
        const nameSpan = document.createElement("span");
        nameSpan.textContent = filename;
        nameSpan.style.cssText = "font-size: 0.875rem; text-align: center; padding: 0.25rem 0.5rem; word-break: break-all; font-weight: 600";

        // wrapper is inserted as sibling to label (outside it) so clicks don't trigger the label's for attr
        const wrapper = document.createElement("div");
        wrapper.id = "file-preview";
        wrapper.style.cssText = "width: 100%; display: flex; flex-direction: column; align-items: center; gap: 0.25rem; padding-top: 0.5rem; overflow: hidden;";
        wrapper.addEventListener("click", e => e.stopPropagation()); // prevent bubbling to uploadDiv
        wrapper.appendChild(el);
        wrapper.appendChild(nameSpan);

        // X button sits at top-right of uploadDiv, outside the preview wrapper
        const btn = document.createElement("button");
        btn.id = "clear-file";
        btn.type = "button";
        btn.textContent = "×";
        btn.style.cssText = "position: absolute; top: 0.5rem; right: 0.5rem; z-index: 1; width: 1.5rem; height: 1.5rem; background: var(--text-color); color: var(--bg-color); border: none; border-radius: 9999px; font-size: 1rem; cursor: pointer; display: flex; align-items: center; justify-content: center;";
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
            clearFile();
        });

        const label = uploadDiv.querySelector("label");
        label.style.display = "none";
        label.insertAdjacentElement("afterend", wrapper); // inserts wrapper as sibling to label, inside uploadDiv
        uploadDiv.appendChild(btn);
    }

    // removePreview removes an existing file preview and restores the default file icon
    function removePreview() {
        const wrapper = document.getElementById("file-preview");
        if (wrapper) wrapper.remove();
        const btn = document.getElementById("clear-file");
        if (btn) btn.remove();
        uploadDiv.querySelector("label").style.display = "";
    }

    // clearFile clears a file from the file input
    function clearFile() {
        fileInput.value = "";
        fileLabel.textContent = "Choose a file to upload";
        removePreview();
    }
};
