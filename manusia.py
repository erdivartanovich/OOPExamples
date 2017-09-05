class Manusia:
    def __init__(self, pname):
        self.name = pname

    def berjalan(self):
        print(self.name + ' sedang berjalan')


class Superhero(Manusia):
    def terbang(self):
        print(self.name + ' sedang terbang')


manusia1 = Manusia('ivan')
manusia2 = Manusia('erdi')

manusia1.berjalan()




