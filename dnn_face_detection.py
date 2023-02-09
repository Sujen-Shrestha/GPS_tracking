import os
import numpy as np
import cv2


modelFile ="/home/sujen/projects/c2c-ai/assignment-6/models/res10_300x300_ssd_iter_140000_fp16.caffemodel"
configFile ="/home/sujen/projects/c2c-ai/assignment-6/models/deploy.prototxt"
net = cv2.dnn.readNetFromCaffe(configFile, modelFile)

def detect_face(img,blob_size = 300, threshold=0.9):
    height, width = img.shape[:2]
    blob = cv2.dnn.blobFromImage(img,1.0, (blob_size, blob_size), (104.0, 117.0, 123.0))
    net.setInput(blob)
    faces = net.forward()

    boxes = []
    for i in range(faces.shape[2]):
        confidence = faces[0, 0, i, 2]
        if confidence > threshold:
            box = faces[0, 0, i, 3:7]* np.array([width, height, width, height])
    
            if (0 <= box[0] <= width) and (0 <= box[1] <= height) and \
                (0 <= box[2] <= width) and (0 <= box[3] <= height):
                bb = np.round(box,2)
                boxes.append(bb)

    return np.array(boxes)


if __name__ == '__main__':
    cap = cv2.VideoCapture('/media/info/New Volume/ComputerVision/attendance/app/datasets/20191115_152635.mp4')
    import time 
    stime = time.time()
    try:
        while True:
            ret, img = cap.read()
            boxes = detect_face(img)
            print(boxes)
            for box in boxes:
                (x, y, x1, y1) = box.astype("int")
                cv2.rectangle(img, (x, y), (x1, y1), (0, 0, 255), 2)
            nrof_faces = boxes.shape[0]
            # print(nrof_faces)
            cv2.imshow(" ", img)
            cv2.waitKey(1)
    except:
        pass
    print(time.time() - stime)