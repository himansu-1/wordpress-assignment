from docx import Document
from docx.shared import RGBColor

def is_custom_red_text(run):
    """Check if run text is colored with #C00000 (RGB: 192, 0, 0)"""
    color = run.font.color
    if color and color.rgb:
        return color.rgb == RGBColor(192, 0, 0)
    return False

def extract_projects_from_docx(doc_path):
    document = Document(doc_path)
    projects = []

    title = None
    capture_desc = False
    description = ""

    for para in document.paragraphs:
        red_text = "".join(run.text for run in para.runs if is_custom_red_text(run)).strip()

        if red_text:
            if title and description:
                projects.append({
                    "title": title,
                    "description": description.strip(),
                    "author": "Dr. S. N. Tripathy",
                    "image": ""
                })
                description = ""

            title = red_text
            capture_desc = False

        elif "Projects Overview" in para.text:
            capture_desc = True
            description = ""

        elif "Step-by-Step" in para.text:
            capture_desc = False

        elif capture_desc:
            if para.text.strip():
                description += para.text.strip() + " "

    if title and description:
        projects.append({
            "title": title,
            "description": description.strip(),
            "author": "Dr. S. N. Tripathy",
            "image": ""
        })

    return projects

def save_projects_to_file(projects, filename="output.php"):
    with open(filename, "w", encoding="utf-8") as f:
        for project in projects:
            f.write("    [\n")
            for key, value in project.items():
                f.write(f"        '{key}' => '{value}',\n")
            f.write("    ],\n")

# Run the extraction and save to file
docx_path =  "C:/xampp/htdocs/wordpress-assignment/wp-content/themes/snt-sir/assets/img/project/Project Management and Execution.docx"  # 🔁 Replace with your actual file path
projects = extract_projects_from_docx(docx_path)
save_projects_to_file(projects)