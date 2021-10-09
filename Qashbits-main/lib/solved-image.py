from PIL import Image

def solved(image):
        ImageObject = Image.open(image)
        left = 1
        top = 20
        right = 300
        bottom = 150
        ImageObject = ImageObject.crop((left,top,right,bottom))
        return ImageObject
