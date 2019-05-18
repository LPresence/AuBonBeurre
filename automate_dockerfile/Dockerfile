FROM python:3.7

WORKDIR /usr/src/app

#COPY requirements.txt ./
#RUN pip install --no-cache-dir -r requirements.txt
RUN mkdir /usr/src/app/files
COPY automated.py .
COPY init.py .

CMD ["python", "./init.py" ]
