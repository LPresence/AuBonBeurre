FROM python:3.7

WORKDIR /usr/src/app

RUN pip install nose
COPY automated.py .
COPY init.py .

CMD ["python", "./init.py" ]
