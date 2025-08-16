import os
from PIL import Image

def convert_and_rename_images(directory):
    # Step 1: Convert .jpg/.jpeg files to .png
    for root, _, files in os.walk(directory):
        for file in files:
            if file.lower().endswith(('.jpg', '.jpeg')):
                jpg_path = os.path.join(root, file)
                png_path = os.path.splitext(jpg_path)[0] + '.png'
                try:
                    with Image.open(jpg_path) as img:
                        img.convert('RGB').save(png_path, 'PNG')
                    print(f"Converted: {jpg_path} -> {png_path}")
                    os.remove(jpg_path)
                except Exception as e:
                    print(f"Error converting {jpg_path}: {e}")

    # Step 2: Gather all .png files (including newly converted ones)
    # png_files = []
    # for root, _, files in os.walk(directory):
    #     for file in files:
    #         if file.lower().endswith('.png'):
    #             png_files.append(os.path.join(root, file))

    # # Step 3: Rename them as image_1.png, image_2.png...
    # png_files.sort()  # Optional: ensures consistent order
    # for idx, file_path in enumerate(png_files, start=1):
    #     new_name = f"image_{idx}.png"
    #     new_path = os.path.join(os.path.dirname(file_path), new_name)
    #     try:
    #         os.rename(file_path, new_path)
    #         print(f"Renamed: {file_path} -> {new_path}")
    #     except Exception as e:
    #         print(f"Error renaming {file_path}: {e}")

# Example usage
if __name__ == "__main__":
    path_to_folder = input("Enter the path to the folder: ").strip()
    if os.path.isdir(path_to_folder):
        convert_and_rename_images(path_to_folder)
    else:
        print("Invalid folder path.")
