# in test_fancy.py
from nose2.tools import params

@params("12")
def test_is_knight(value):
        assert value.startswith('3')
