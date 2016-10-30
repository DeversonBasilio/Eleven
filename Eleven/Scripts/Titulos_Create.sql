USE [ElevenDB]
GO

/****** Object:  Table [dbo].[Titulos]    Script Date: 29/10/2016 21:01:25 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Titulos](
	[CODIGO] [numeric](18, 0) NOT NULL,
	[COD_Bordero] [numeric](18, 0) NOT NULL,
	[Especie] [varchar](50) NOT NULL,
	[Vencimento] [date] NOT NULL,
	[COD_Empresa] [numeric](18, 0) NOT NULL,
	[Valor] [money] NOT NULL,
	[Num_Titulo] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Titulos] PRIMARY KEY CLUSTERED 
(
	[CODIGO] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

ALTER TABLE [dbo].[Titulos]  WITH CHECK ADD  CONSTRAINT [FK_Titulos_Bordero] FOREIGN KEY([COD_Bordero])
REFERENCES [dbo].[Bordero] ([CODIGO])
GO

ALTER TABLE [dbo].[Titulos] CHECK CONSTRAINT [FK_Titulos_Bordero]
GO

