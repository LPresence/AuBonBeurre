FROM python:3.7

WORKDIR /usr/src/app

RUN pip install nose2
COPY automated.py .
COPY init.py .
COPY test.py .

CMD ["python", "./init.py" ]
