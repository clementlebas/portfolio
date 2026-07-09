from PIL import Image, ImageDraw

def make_round_favicon(input_path, output_path):
    img = Image.open(input_path).convert("RGBA")
    
    # Crop to a square
    width, height = img.size
    min_dim = min(width, height)
    
    left = (width - min_dim) / 2
    top = (height - min_dim) / 2
    right = (width + min_dim) / 2
    bottom = (height + min_dim) / 2
    
    img = img.crop((left, top, right, bottom))
    
    # Create circular mask
    mask = Image.new('L', (min_dim, min_dim), 0)
    draw = ImageDraw.Draw(mask)
    draw.ellipse((0, 0, min_dim, min_dim), fill=255)
    
    # Apply mask
    output = Image.new('RGBA', (min_dim, min_dim), (0, 0, 0, 0))
    output.paste(img, (0, 0), mask)
    
    # Resize to 256x256 for favicon to save space
    output = output.resize((256, 256), Image.Resampling.LANCZOS)
    
    output.save(output_path, format="PNG")

make_round_favicon("images/Photo26_25A2.jpg", "favicon.png")
