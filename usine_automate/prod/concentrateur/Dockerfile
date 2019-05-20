FROM python:3.7

WORKDIR /usr/src/app

#install mysql 

RUN pip install mysql-connector-python
RUN mkdir /usr/src/app/files
COPY workerServer.py .

EXPOSE 1111
CMD ["python", "./workerServer.py" ]
