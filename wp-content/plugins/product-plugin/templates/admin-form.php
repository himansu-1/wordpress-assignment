<?php
if (isset($_SESSION['product_flash'])): ?>
    <div class="notice notice-success is-dismissible">
        <p><?php echo esc_html($_SESSION['product_flash']); ?></p>
    </div>
<?php
    unset($_SESSION['product_flash']);
endif;
?>
<style>
    .image-input {
        flex: 0 0 calc(100% / 4 - 10px);
        /* 7 per row with spacing */
        margin-bottom: 8px;
    }
</style>
<div class="wrap">
    <h1>Add Product</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" placeholder="Product Name" class="form-control" required>
                <label for="product_description">Product Description:</label>
                <textarea name="product_description" placeholder="Description" class="form-control" rows="1"></textarea>
            </div>
            <div class="col-3">
                <label for="product_rating">Product Rating:</label>
                <input type="number" name="product_rating" min="1" max="5" class="form-control" />
                <label>Number of Types:</label>
                <input type="number" id="type-count" name="type_count" min="0" class="form-control" />
            </div>

            <div id="type-fields-container">
                <!-- JavaScript will insert type fields here -->
            </div>


            <div class="text-center my-3">
                <button class="button button-primary">Save Product</button>
            </div>
        </div>
    </form>
</div>

<script>
    const MAX_IMAGES = 8;

    document.getElementById('type-count').addEventListener('change', function() {
        const container = document.getElementById('type-fields-container');
        container.innerHTML = '';
        const count = parseInt(this.value);
        for (let i = 0; i < count; i++) {
            container.innerHTML += `
            <hr>
            <h5>Type ${i + 1}</h5>
            <div class="row">
                <div class="row col-6">
                    <label for="type_name">Type Name:</label>
                    <input name="types[${i}][name]" placeholder="Type Name" class="form-control" required>
                    
                    <label for="type_description">Type Description:</label>
                    <textarea name="types[${i}][description]" placeholder="Type Description" class="form-control" rows="1"></textarea>
                </div>
                <div class="col-6">
                <label for="type_json">Item Json:</label>
                    <textarea name="types[${i}][item]" placeholder='Item JSON' class="form-control" rows="4"></textarea>
                </div>
            </div>
            
            <div>
                <label>Images:</label>
                <div class="d-flex flex-wrap gap-2" id="type-image-fields-${i}">
                    <div class='form-group border p-2'>
                        <input type="file" name="types[${i}][images][]" accept=".jpg, .jpeg, .png" class="form-control image-input">
                        <input type="text" name="types[${i}][image_names][]" class="form-control image-input">
                        <input type="text" name="types[${i}][image_description][]" class="form-control image-input">
                    </div>
                </div>
                <button type="button" class="button add-image-btn" data-type-index="${i}">+</button>
                <span class="image-limit-msg" id="image-limit-msg-${i}" style="color:red;display:none;">Max ${MAX_IMAGES} images allowed.</span>
            </div>
            `;
        }

        // Attach event listeners to all "+" buttons
        document.querySelectorAll('.add-image-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const typeIndex = this.getAttribute('data-type-index');
                const imageFieldsContainer = document.getElementById(`type-image-fields-${typeIndex}`);
                const currentFields = imageFieldsContainer.querySelectorAll('input[type=\"file\"]').length;
                if (currentFields < MAX_IMAGES) {
                    // const input = document.createElement('input');
                    // input.type = 'file';
                    // input.name = `types[${typeIndex}][images][]`;
                    // input.className = 'form-control image-input';
                    // input.setAttribute('accept', '.jpg, .jpeg, .png');
                    // imageFieldsContainer.appendChild(input);
                    const imageGroup = document.createElement('div');
                    imageGroup.className = 'image-group mb-2';
                    // imageGroup.style.flex = '0 0 calc(100% / 2 - 10px)'; // Optional layout tweak

                    const input = document.createElement('input');
                    input.type = 'file';
                    input.name = `types[${typeIndex}][images][]`;
                    input.className = 'form-control mb-1';
                    input.setAttribute('accept', '.jpg, .jpeg, .png');

                    const nameInput = document.createElement('input');
                    nameInput.type = 'text';
                    nameInput.name = `types[${typeIndex}][image_names][]`;
                    nameInput.className = 'form-control mb-1';
                    nameInput.placeholder = 'Image Name';

                    const descInput = document.createElement('input');
                    descInput.type = 'text';
                    descInput.name = `types[${typeIndex}][image_descriptions][]`;
                    descInput.className = 'form-control';
                    descInput.placeholder = 'Image Description';

                    imageGroup.appendChild(input);
                    imageGroup.appendChild(nameInput);
                    imageGroup.appendChild(descInput);

                    imageFieldsContainer.appendChild(imageGroup);

                    document.getElementById(`image-limit-msg-${typeIndex}`).style.display = 'none';
                } else {
                    document.getElementById(`image-limit-msg-${typeIndex}`).style.display = 'inline';
                }
            });
        });
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        const fileInputs = document.querySelectorAll('input[type="file"]');
        for (const input of fileInputs) {
            for (const file of input.files) {
                if (!file.type.match(/^image\/(jpeg|png)$/)) {
                    alert('Only JPG and PNG images are allowed.');
                    e.preventDefault();
                    return;
                }
            }
        }
    });
</script>