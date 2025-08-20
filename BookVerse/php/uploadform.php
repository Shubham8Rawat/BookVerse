<div id="uploadModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Upload a Book</h2>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
        <div class="input-group">
            <div class="input-item">
                <label for="bookTitle">Title (optional):</label>
                <input type="text" name="bookTitle" id="bookTitle" placeholder="Enter book title">
            </div>
            <div class="input-item">
                <label for="bookFile">Select a book file (PDF):</label>
                <input type="file" name="bookFile" id="bookFile" accept=".pdf" required>
            </div>
        </div>


            <label>Main Tag (Genre):</label><br>
            <input type="radio" name="mainTag" value="Action/Adventure" required> Action/Adventure
            <input type="radio" name="mainTag" value="Comedy"> Comedy
            <input type="radio" name="mainTag" value="SciFi"> SciFi
            <input type="radio" name="mainTag" value="Drama"> Drama
            <input type="radio" name="mainTag" value="Thriller"> Thriller
            <input type="radio" name="mainTag" value="Educational"> Educational
            <input type="radio" name="mainTag" value="Biography"> Biography
            <br><br>
            
            <label>Additional Tags (up to 3):</label><br>
            <input type="checkbox" name="tags[]" value="Action"> Action/Adventure
            <input type="checkbox" name="tags[]" value="Comedy"> Comedy
            <input type="checkbox" name="tags[]" value="SciFi"> SciFi
            <input type="checkbox" name="tags[]" value="Drama"> Drama
            <input type="checkbox" name="tags[]" value="Thriller"> Thriller
            <input type="checkbox" name="tags[]" value="Educational"> Educational
            <input type="checkbox" name="tags[]" value="Biography"> Biography
            <br>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('input[name="tags[]"]');
    var limit = 3;
    var checkedCount = 0;

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkedCount++;
            } else {
                checkedCount--;
            }

            if (checkedCount > limit) {
                this.checked = false;
                checkedCount--;
            }
        });
    });
});
</script>



            <!-- Add more radio buttons as needed for different tags -->
            <br>
            
            <!-- Text field for description -->
            <label for="description">Description:</label><p style="color:red; display: inline-block;">Minimum 25 words</p><br>
            <textarea id="description" name="description" rows="4" cols="50" placeholder="Enter book description" maxlength="700" style="resize: none;" required></textarea><br>
            <span id="charCount">0/700 characters</span><br>
            <input type="submit" value="Submit" id="uploadsubmitButton" disabled> <!-- Add an ID to the submit button -->

            <script>
                // Get the textarea element
                var textarea = document.getElementById("description");
                // Get the span element to display character count
                var charCountSpan = document.getElementById("charCount");
                // Get the submit button
                var submitButton = document.getElementById("uploadsubmitButton");

                // Add event listener for input events
                textarea.addEventListener("input", function() {
                    // Get the current character count
                    var charCount = textarea.value.length;
                    // Update the character count display
                    charCountSpan.textContent = charCount + "/700 characters";
                
                    // Check if character limit is exceeded
                    if (charCount > 700) {
                        // Trim the text to the maximum allowed length
                        textarea.value = textarea.value.slice(0, 700);
                        // Update the character count display again
                        charCountSpan.textContent = "700/700 characters (maximum reached)";
                    }
                
                    // Split the text into words
                    var words = textarea.value.trim().split(/\s+/);
                    // Get the number of words
                    var wordCount = words.length;
                
                    // Enable or disable the submit button based on word count
                    if (wordCount >= 20) { // Adjust wordcount for minimum word count
                        submitButton.removeAttribute("disabled");
                    } else {
                        submitButton.setAttribute("disabled", "disabled");
                    }
                });
            </script>
        </form>
    </div>
</div>