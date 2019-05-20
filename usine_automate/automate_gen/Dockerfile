FROM python:3.7

WORKDIR /usr/src/app

RUN mkdir /usr/src/app/files

COPY automated.py .
COPY init.py .

CMD ["python", "./init.py" ]
