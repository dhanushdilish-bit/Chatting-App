from PIL import Image

def process():
    img = Image.open('public/logo1.png').convert('RGBA')
    width, height = img.size
    
    mask = Image.new("L", (width, height), 0)
    pixels = img.load()
    mask_pixels = mask.load()
    
    queue = [(0, 0), (width-1, 0), (0, height-1), (width-1, height-1)]
    visited = set(queue)
    
    def is_bg(r, g, b, a):
        # Tolerate slight gradient up to #E6E6E6
        return r > 210 and g > 210 and b > 210
        
    for q in queue:
        r,g,b,a = pixels[q[0], q[1]]
        if is_bg(r,g,b,a):
            mask_pixels[q[0], q[1]] = 255
            
    head = 0
    while head < len(queue):
        x, y = queue[head]
        head += 1
        
        for dx, dy in [(1,0),(-1,0),(0,1),(0,-1)]:
            nx, ny = x+dx, y+dy
            if 0 <= nx < width and 0 <= ny < height:
                if (nx, ny) not in visited:
                    visited.add((nx, ny))
                    r,g,b,a = pixels[nx, ny]
                    if is_bg(r,g,b,a):
                        mask_pixels[nx, ny] = 255
                        queue.append((nx, ny))
                        
    # Now set background pixels to transparent
    for y in range(height):
        for x in range(width):
            if mask_pixels[x, y] == 255:
                r,g,b,a = pixels[x, y]
                # To prevent stark edges, we can do some simple anti-aliasing but transparent is fine for MVP
                pixels[x, y] = (r, g, b, 0)
                
    img.save('public/logo1.png')
    print("Background removed successfully.")

if __name__ == '__main__':
    process()
