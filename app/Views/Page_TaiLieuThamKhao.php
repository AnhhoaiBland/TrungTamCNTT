<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư mục tài liệu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
    }

    .sidebar {
        height: 100vh;
        background-color: #343a40;
        color: white;
        padding: 15px;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .main-content {
        padding: 20px;
    }

    .folder-list,
    .nested {
        list-style-type: none;
    }

    .folder-list {
        margin: 0;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .folder {
        margin: 10px;
        text-align: center;
    }

    .folder.open>.caret::before {
        transform: rotate(90deg);
    }

    .nested {
        display: none;
        padding-left: 20px;
        margin-left: 10px;
        width: 100%;
    }

    .file-tree .folder.open>.nested {
        display: block;
    }

    .folder-name,
    .file-name {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        font-weight: 500;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .folder-name {
        color: #007bff;
        flex-direction: column;
    }

    .folder-name:hover {
        background-color: #e9ecef;
    }

    .file-name {
        color: #6c757d;
    }

    .file-name:hover {
        background-color: #f1f3f5;
    }

    .file .btn {
        padding: 5px 10px;
        font-size: 14px;
        margin-left: 10px;
    }

    .file .btn-outline-primary,
    .file .btn-outline-secondary {
        border-radius: 20px;
    }

    .block_title-gioi-thieu {
        font-weight: 700;
    }

    .container.bg-body {
        background-color: white;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .heading-title {
        font-weight: bold;
        margin-top: 0;
        text-align: left;
        border-bottom: 2px solid #005baf;
        padding-bottom: 10px;
        font-style: italic;
        font-size: 1.8rem;
        font-weight: bold;
        margin-top: 30px;
        margin-bottom: 20px;
        color: #005baf;
    }

    .folder-icon {
        font-size: 50px;
        margin-bottom: 5px;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- Main Content -->
            <div class="col-md-12 main-content">


                <!-- Folder and File Tree Structure -->
                <div class="container p-4 bg-body">
                    <h2 class="heading-title">Thư mục tài liệu</h2>
                    <div class="file-tree">
                        <ul class="folder-list">
                            <?php foreach ($folders as $folder): ?>
                            <li class="folder">
                                <!-- Main Folder -->
                                <span class="caret folder-name"
                                    data-folder="<?= htmlspecialchars(json_encode($folder)) ?>">
                                    <img width="100" height="100" src="https://img.icons8.com/arcade/100/mac-folder.png"
                                        alt="mac-folder" />
                                    <?= $folder['name'] ?>
                                </span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal for Folder Contents -->
<div class="modal fade" id="folderModal" tabindex="-1" aria-labelledby="folderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="folderModalLabel">Nội dung thư mục</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="folderContents"></div>
            </div>
        </div>
    </div>
</div>

<!-- Expand/Collapse Script for Folder Tree -->
<script>
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('folder-name')) {
        const folderData = JSON.parse(event.target.getAttribute('data-folder'));
        const folderContents = document.getElementById('folderContents');
        folderContents.innerHTML = generateFolderContents(folderData);
        const folderModal = new bootstrap.Modal(document.getElementById('folderModal'));
        folderModal.show();

        // Add event listener for modal close
        document.getElementById('folderModal').addEventListener('hidden.bs.modal', function() {
            folderContents.innerHTML = ''; // Clear the contents when modal is closed
            location.reload(); // Reload the page when modal is closed
        });
    }
});

function generateFolderContents(folder) {
    let html = `<h4>${folder.name}</h4>`;
    if (folder.files && folder.files.length > 0) {
        html += '<ul>';
        folder.files.forEach(file => {
            html += `<li class="file d-flex align-items-center">
                <span class="file-name">
                    <img width="50" height="50" src="https://img.icons8.com/arcade/50/file.png" alt="file"/>${file.name}
                </span>
                <a href="${file.file_path}" class="btn btn-sm btn-outline-primary ms-2" download>Tải Về</a>
                <a href="${file.file_path}" class="btn btn-sm btn-outline-secondary ms-2" target="_blank">Xem Trước</a>
             </li>`;
        });
        html += '</ul>';
    }
    if (folder.subfolders && folder.subfolders.length > 0) {
        html += '<ul>';
        folder.subfolders.forEach(subfolder => {
            html += `<li class="folder">
                <span class="caret folder-name" data-folder='${JSON.stringify(subfolder)}'>
                    <img width="100" height="100" src="https://img.icons8.com/arcade/100/mac-folder.png" alt="mac-folder"/></i>${subfolder.name}
                </span>
                <ul class="nested">${generateFolderContents(subfolder)}</ul>
             </li>`;
        });
        html += '</ul>';
    }
    return html;
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>