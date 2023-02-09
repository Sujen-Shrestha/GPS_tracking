import pymysql
import cv2
import os
import numpy as np
from dnn_face_detection import detect_face
from sklearn.metrics.pairwise import cosine_similarity
from keras_facenet import FaceNet

embedder = FaceNet()

#embedding image
def emb(img):
    embedding_img = embedder.embeddings(np.expand_dims(img,axis=0))
    return embedding_img

#comparing images
def compare(img1,img2):
    similarity_score = cosine_similarity(img1,img2)
    if similarity_score >= 0.70 :
        return True
    else:
        return False
conn = pymysql.connect(host="localhost", user="sagar", password="Iamsagar456@", database="sagar")

#facedetection function
def face_detection(img):
    faces = detect_face(img)
    print(faces)
    for bounding_box in faces:
        x = int(bounding_box[0])
        y = int(bounding_box[1])
        x2 = int(bounding_box[2])
        y2 = int(bounding_box[3])
        print(x,y,x2,y2)
        crop_face = img[y:y2,x:x2]
        crop_face = cv2.resize(crop_face,(160,160)) #convertion only works in (160,160) so resizing
        return crop_face

# Create a cursor
cursor = conn.cursor()

# Execute the SQL query
cursor.execute("SELECT file FROM usertable WHERE status = 0")

# Fetch the data
data = cursor.fetchall()

address = '/var/www/html/GPS_tracking/uploads/'
# Loop through the data and print each row
for row in data:
    print(row)
    temp1 = str(row).replace("('",'')
    name = temp1.replace("',)",'')
    actual_ad = address+name
    print(actual_ad)
    img=cv2.imread(actual_ad)

    face_img = face_detection(img)
    cv2.imshow("face_img",face_img)
    embedded_img = emb(face_img)
    #if write_var is true the images have more than 70% features match
    



    #print(img)
    #cv2.imshow("image",img)
    cv2.waitKey(0)
    cv2.destroyAllWindows()

# Close the cursor and the database connection
cursor.close()
conn.close()
