<?php
/**
 * Country
 *
 * PHP version 8.1
 *
 * @package  Dhl\Rest\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Shipping API (Post & Parcel Germany)
 *
 * Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.
 *
 * The version of the OpenAPI document: 2.1.8
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Shipping\Model;

/**
 * Country Class Doc Comment
 *
 * @description A valid country code consisting of three characters according to ISO 3166-1 alpha-3.
 * @package  Dhl\Rest\Shipping
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum Country: string
{
    case ABW = 'ABW';

    case AFG = 'AFG';

    case AGO = 'AGO';

    case AIA = 'AIA';

    case ALA = 'ALA';

    case ALB = 'ALB';

    case _AND = 'AND';

    case ARE = 'ARE';

    case ARG = 'ARG';

    case ARM = 'ARM';

    case ASM = 'ASM';

    case ATG = 'ATG';

    case AUS = 'AUS';

    case AUT = 'AUT';

    case AZE = 'AZE';

    case BDI = 'BDI';

    case BEL = 'BEL';

    case BEN = 'BEN';

    case BES = 'BES';

    case BFA = 'BFA';

    case BGD = 'BGD';

    case BGR = 'BGR';

    case BHR = 'BHR';

    case BHS = 'BHS';

    case BIH = 'BIH';

    case BLM = 'BLM';

    case BLR = 'BLR';

    case BLZ = 'BLZ';

    case BMU = 'BMU';

    case BOL = 'BOL';

    case BRA = 'BRA';

    case BRB = 'BRB';

    case BRN = 'BRN';

    case BTN = 'BTN';

    case BVT = 'BVT';

    case BWA = 'BWA';

    case CAF = 'CAF';

    case CAN = 'CAN';

    case CCK = 'CCK';

    case CHE = 'CHE';

    case CHL = 'CHL';

    case CHN = 'CHN';

    case CIV = 'CIV';

    case CMR = 'CMR';

    case COD = 'COD';

    case COG = 'COG';

    case COK = 'COK';

    case COL = 'COL';

    case COM = 'COM';

    case CPV = 'CPV';

    case CRI = 'CRI';

    case CUB = 'CUB';

    case CUW = 'CUW';

    case CXR = 'CXR';

    case CYM = 'CYM';

    case CYP = 'CYP';

    case CZE = 'CZE';

    case DEU = 'DEU';

    case DJI = 'DJI';

    case DMA = 'DMA';

    case DNK = 'DNK';

    case DOM = 'DOM';

    case DZA = 'DZA';

    case ECU = 'ECU';

    case EGY = 'EGY';

    case ERI = 'ERI';

    case ESP = 'ESP';

    case EST = 'EST';

    case ETH = 'ETH';

    case FIN = 'FIN';

    case FJI = 'FJI';

    case FLK = 'FLK';

    case FRA = 'FRA';

    case FRO = 'FRO';

    case FSM = 'FSM';

    case GAB = 'GAB';

    case GBR = 'GBR';

    case GEO = 'GEO';

    case GGY = 'GGY';

    case GHA = 'GHA';

    case GIB = 'GIB';

    case GIN = 'GIN';

    case GLP = 'GLP';

    case GMB = 'GMB';

    case GNB = 'GNB';

    case GNQ = 'GNQ';

    case GRC = 'GRC';

    case GRD = 'GRD';

    case GRL = 'GRL';

    case GTM = 'GTM';

    case GUF = 'GUF';

    case GUM = 'GUM';

    case GUY = 'GUY';

    case HKG = 'HKG';

    case HMD = 'HMD';

    case HND = 'HND';

    case HRV = 'HRV';

    case HTI = 'HTI';

    case HUN = 'HUN';

    case IDN = 'IDN';

    case IMN = 'IMN';

    case IND = 'IND';

    case IRL = 'IRL';

    case IRN = 'IRN';

    case IRQ = 'IRQ';

    case ISL = 'ISL';

    case ISR = 'ISR';

    case ITA = 'ITA';

    case JAM = 'JAM';

    case JEY = 'JEY';

    case JOR = 'JOR';

    case JPN = 'JPN';

    case KAZ = 'KAZ';

    case KEN = 'KEN';

    case KGZ = 'KGZ';

    case KHM = 'KHM';

    case KIR = 'KIR';

    case KNA = 'KNA';

    case KOR = 'KOR';

    case KWT = 'KWT';

    case LAO = 'LAO';

    case LBN = 'LBN';

    case LBR = 'LBR';

    case LBY = 'LBY';

    case LCA = 'LCA';

    case LIE = 'LIE';

    case LKA = 'LKA';

    case LSO = 'LSO';

    case LTU = 'LTU';

    case LUX = 'LUX';

    case LVA = 'LVA';

    case MAC = 'MAC';

    case MAF = 'MAF';

    case MAR = 'MAR';

    case MCO = 'MCO';

    case MDA = 'MDA';

    case MDG = 'MDG';

    case MDV = 'MDV';

    case MEX = 'MEX';

    case MHL = 'MHL';

    case MKD = 'MKD';

    case MLI = 'MLI';

    case MLT = 'MLT';

    case MMR = 'MMR';

    case MNE = 'MNE';

    case MNG = 'MNG';

    case MNP = 'MNP';

    case MOZ = 'MOZ';

    case MRT = 'MRT';

    case MSR = 'MSR';

    case MTQ = 'MTQ';

    case MUS = 'MUS';

    case MWI = 'MWI';

    case MYS = 'MYS';

    case MYT = 'MYT';

    case NAM = 'NAM';

    case NCL = 'NCL';

    case NER = 'NER';

    case NFK = 'NFK';

    case NGA = 'NGA';

    case NIC = 'NIC';

    case NIU = 'NIU';

    case NLD = 'NLD';

    case NOR = 'NOR';

    case NPL = 'NPL';

    case NRU = 'NRU';

    case NZL = 'NZL';

    case OMN = 'OMN';

    case PAK = 'PAK';

    case PAN = 'PAN';

    case PCN = 'PCN';

    case PER = 'PER';

    case PHL = 'PHL';

    case PLW = 'PLW';

    case PNG = 'PNG';

    case POL = 'POL';

    case PRI = 'PRI';

    case PRK = 'PRK';

    case PRT = 'PRT';

    case PRY = 'PRY';

    case PSE = 'PSE';

    case PYF = 'PYF';

    case QAT = 'QAT';

    case REU = 'REU';

    case ROU = 'ROU';

    case RUS = 'RUS';

    case RWA = 'RWA';

    case SAU = 'SAU';

    case SDN = 'SDN';

    case SEN = 'SEN';

    case SGP = 'SGP';

    case SHN = 'SHN';

    case SJM = 'SJM';

    case SLB = 'SLB';

    case SLE = 'SLE';

    case SLV = 'SLV';

    case SMR = 'SMR';

    case SOM = 'SOM';

    case SPM = 'SPM';

    case SRB = 'SRB';

    case SSD = 'SSD';

    case STP = 'STP';

    case SUR = 'SUR';

    case SVK = 'SVK';

    case SVN = 'SVN';

    case SWE = 'SWE';

    case SWZ = 'SWZ';

    case SXM = 'SXM';

    case SYC = 'SYC';

    case SYR = 'SYR';

    case TCA = 'TCA';

    case TCD = 'TCD';

    case TGO = 'TGO';

    case THA = 'THA';

    case TJK = 'TJK';

    case TKL = 'TKL';

    case TKM = 'TKM';

    case TLS = 'TLS';

    case TON = 'TON';

    case TTO = 'TTO';

    case TUN = 'TUN';

    case TUR = 'TUR';

    case TUV = 'TUV';

    case TWN = 'TWN';

    case TZA = 'TZA';

    case UGA = 'UGA';

    case UKR = 'UKR';

    case URY = 'URY';

    case USA = 'USA';

    case UZB = 'UZB';

    case VAT = 'VAT';

    case VCT = 'VCT';

    case VEN = 'VEN';

    case VGB = 'VGB';

    case VIR = 'VIR';

    case VNM = 'VNM';

    case VUT = 'VUT';

    case WLF = 'WLF';

    case WSM = 'WSM';

    case YEM = 'YEM';

    case ZAF = 'ZAF';

    case ZMB = 'ZMB';

    case ZWE = 'ZWE';

    case UNKNOWN = 'UNKNOWN';

}


