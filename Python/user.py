import imp

from importlib_metadata import email
from account import Account

class User(Account):
    def __init__(self, name, document, email, password):
        super().__init__(name, document,  email, password)
        
